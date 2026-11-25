/*
 * Bixtron conversational enquiry (contact page + floating widget). Vanilla JS, no dependencies.
 * Config comes from window.bxChat (see inc/bixtron-chat.php).
 */
(function () {
  'use strict';
  var cfg = window.bxChat;
  if (!cfg || window.bxChatReady) { return; }

  var REDUCED = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var KEY = 'bxChat_v1';
  var T0 = Date.now();

  function h(tag, cls, text) {
    var e = document.createElement(tag);
    if (cls) { e.className = cls; }
    if (text != null) { e.textContent = text; }
    return e;
  }
  function firstName(n) { return (n || '').trim().split(/\s+/)[0]; }
  function topicLabel(k) { return cfg.topics[k] || k; }
  function officeById(id) {
    for (var i = 0; i < cfg.offices.length; i++) { if (cfg.offices[i].id === id) { return cfg.offices[i]; } }
    return null;
  }

  /* ---------------------------------------------------------------- state */
  var state = { step: 0, data: {}, log: [], done: false, ref: '' };
  try {
    var saved = JSON.parse(sessionStorage.getItem(KEY) || 'null');
    if (saved && saved.log && saved.log.length) { state = saved; }
  } catch (e) { /* storage blocked */ }
  function save() { try { sessionStorage.setItem(KEY, JSON.stringify(state)); } catch (e) { /* ignore */ } }

  /* ---------------------------------------------------------------- steps */
  var QUOTE_TOPICS = ['quote', 'product', 'advice'];
  var PLACEHOLDERS = {
    quote: 'e.g. 20 x P3 filters, size M, delivery to Nairobi',
    product: 'Which product, how many, and any size or colour',
    advice: 'Describe the hazard or task you need protection for',
    audit: 'Tell us about your site, number of staff and what you need',
    iso: 'Which ISO standard are you working towards?',
    other: 'How can we help?'
  };

  var steps = [
    { id: 'name', input: 'text', ph: 'Your name', ac: 'name',
      ask: function () {
        var out = ['Hi, I’m the Bixtron assistant. I’ll pass your enquiry to the right team in about a minute.'];
        if (cfg.product) { out.push('I can see you’re looking at “' + cfg.product.name + '”.'); }
        out.push('First, what’s your name?');
        return out;
      },
      validate: function (v) { return v.length < 2 ? 'Please type your name.' : ''; },
      apply: function (v) { state.data.name = v; } },

    { id: 'topic',
      ask: function () { return ['Nice to meet you, ' + firstName(state.data.name) + '. What can we help you with?']; },
      chips: function () {
        var c = [];
        if (cfg.product) { c.push({ label: 'Quote for this product', value: 'product-this' }); }
        Object.keys(cfg.topics).forEach(function (k) { c.push({ label: cfg.topics[k], value: k }); });
        return c;
      },
      apply: function (v) {
        if (v === 'product-this') { state.data.topic = 'quote'; state.data.product = cfg.product.name; state.data.category = 'This product'; }
        else { state.data.topic = v; }
      } },

    { id: 'category',
      skip: function () { return QUOTE_TOPICS.indexOf(state.data.topic) < 0 || !!state.data.category; },
      ask: function () { return ['Which product area is it about?']; },
      chips: function () {
        var c = cfg.categories.map(function (n) { return { label: n, value: n }; });
        c.push({ label: 'Not sure yet', value: 'Not sure yet' });
        return c;
      },
      apply: function (v) { state.data.category = v; } },

    { id: 'details', input: 'textarea', ph: function () { return PLACEHOLDERS[state.data.topic] || PLACEHOLDERS.other; },
      ask: function () { return ['Tell us a little more so our team can prepare a proper answer.']; },
      validate: function (v) { return v.length < 5 ? 'A few more words please (at least 5 characters).' : ''; },
      apply: function (v) { state.data.details = v; } },

    { id: 'office',
      ask: function () { return ['Which office is closest to you?']; },
      chips: function () {
        var c = cfg.offices.map(function (o) { return { label: o.label, value: o.id }; });
        c.push({ label: 'Another country', value: 'other' });
        return c;
      },
      apply: function (v) { state.data.office = v; } },

    { id: 'country', skip: function () { return state.data.office !== 'other'; },
      input: 'text', ph: 'Your country', ac: 'country-name',
      ask: function () { return ['Which country are you in? We’ll route you to the right team.']; },
      validate: function (v) { return v.length < 2 ? 'Please type your country.' : ''; },
      apply: function (v) { state.data.country = v; } },

    { id: 'company', input: 'text', ph: 'Company or organisation', ac: 'organization', optional: true,
      ask: function () { return ['Which company or organisation are you with? (optional)']; },
      chips: function () { return [{ label: 'Skip', value: '' }]; },
      apply: function (v) { state.data.company = v; } },

    { id: 'method',
      ask: function () { return ['How should we reply to you?']; },
      chips: function () { return [{ label: 'Email', value: 'email' }, { label: 'Phone or WhatsApp', value: 'phone' }]; },
      apply: function (v) { state.data.method = v; } },

    { id: 'contact',
      input: function () { return state.data.method === 'phone' ? 'tel' : 'email'; },
      ph: function () { return state.data.method === 'phone' ? '+254 7xx xxx xxx' : 'you@company.com'; },
      ac: function () { return state.data.method === 'phone' ? 'tel' : 'email'; },
      ask: function () { return [state.data.method === 'phone' ? 'What’s the best phone or WhatsApp number?' : 'What’s the best email address?']; },
      validate: function (v) {
        if (state.data.method === 'phone') { return v.replace(/\D/g, '').length < 7 ? 'That number looks too short.' : ''; }
        return /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(v) ? '' : 'That email address doesn’t look right.';
      },
      apply: function (v) { state.data.contact = v; } },

    { id: 'confirm', summary: true,
      ask: function () { return ['Thanks, ' + firstName(state.data.name) + '. Here’s what I’ll send:']; },
      chips: function () { return [{ label: 'Send enquiry', value: 'send', primary: true }, { label: 'Start over', value: 'restart' }]; },
      apply: function (v) { if (v === 'restart') { restart(); } else { send(); } } }
  ];

  /* ---------------------------------------------------------------- UI */
  var root, body, foot, chipsBox, form, field, sendBtn, errorEl, host, popup = false, panelOpen = false, busy = false;

  function build(container, isPopup) {
    host = container; popup = isPopup;
    root = h('div', 'bxc' + (isPopup ? ' bxc--popup' : ' bxc--inline'));
    root.id = isPopup ? 'bx-chat-panel' : 'bx-chat-card';
    if (isPopup) { root.setAttribute('role', 'dialog'); root.setAttribute('aria-label', 'Chat with Bixtron'); root.hidden = true; }

    var head = h('div', 'bxc__head');
    var av = h('span', 'bxc__avatar'); var img = h('img'); img.src = cfg.js.split('/js/')[0] + '/images/bixtron/favicon-192.png'; img.alt = ''; img.width = 36; img.height = 36; av.appendChild(img);
    var who = h('div', 'bxc__who');
    who.appendChild(h('strong', null, 'Bixtron Support'));
    var st = h('span', 'bxc__status'); st.appendChild(h('i', 'bxc__dot')); st.appendChild(document.createTextNode('Online · replies within 1 business day'));
    who.appendChild(st);
    var tools = h('div', 'bxc__tools');
    var rs = h('button', 'bxc__icon', null); rs.type = 'button'; rs.setAttribute('aria-label', 'Start over'); rs.title = 'Start over';
    rs.innerHTML = '<svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" d="M4 4v6h6M20 20v-6h-6M5.6 15A8 8 0 0018.4 18M18.4 9A8 8 0 005.6 6"/></svg>';
    rs.addEventListener('click', restart);
    tools.appendChild(rs);
    if (isPopup) {
      var cl = h('button', 'bxc__icon', null); cl.type = 'button'; cl.setAttribute('aria-label', 'Close chat'); cl.title = 'Close';
      cl.innerHTML = '<svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path fill="none" stroke="#fff" stroke-width="2.6" stroke-linecap="round" d="M6 6l12 12M18 6L6 18"/></svg>';
      cl.addEventListener('click', close);
      tools.appendChild(cl);
    }
    head.appendChild(av); head.appendChild(who); head.appendChild(tools);

    body = h('div', 'bxc__body'); body.setAttribute('role', 'log'); body.setAttribute('aria-live', 'polite'); body.setAttribute('aria-relevant', 'additions');

    foot = h('div', 'bxc__foot');
    chipsBox = h('div', 'bxc__chips');
    form = h('form', 'bxc__form'); form.noValidate = true; form.autocomplete = 'on';
    field = h('input', 'bxc__field'); field.type = 'text';
    sendBtn = h('button', 'bxc__send'); sendBtn.type = 'submit'; sendBtn.setAttribute('aria-label', 'Send');
    sendBtn.innerHTML = '<svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="#fff" d="M3 20.5l18-8.5L3 3.5v6.6l11 1.9-11 1.9z"/></svg>';
    form.appendChild(field); form.appendChild(sendBtn);
    errorEl = h('p', 'bxc__error'); errorEl.setAttribute('role', 'alert');
    var priv = h('p', 'bxc__privacy');
    priv.appendChild(document.createTextNode('We only use your details to answer this enquiry. '));
    var pl = h('a', null, 'Privacy'); pl.href = cfg.legal; priv.appendChild(pl);
    foot.appendChild(chipsBox); foot.appendChild(errorEl); foot.appendChild(form); foot.appendChild(priv);

    root.appendChild(head);
    if (isPopup) {
      var qa = h('div', 'bxc__quick');
      var o = cfg.offices[0];
      var wa = h('a', 'bxc__q bxc__q--wa', 'WhatsApp'); wa.href = 'https://wa.me/' + o.wa + '?text=' + encodeURIComponent('Hello Bixtron'); wa.target = '_blank'; wa.rel = 'noopener';
      var tel = h('a', 'bxc__q', 'Call ' + o.city); tel.href = 'tel:' + o.phoneRaw;
      qa.appendChild(wa); qa.appendChild(tel); root.appendChild(qa);
    }
    root.appendChild(body); root.appendChild(foot);
    container.appendChild(root);

    form.addEventListener('submit', function (e) { e.preventDefault(); submitTyped(); });
    field.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' && !e.shiftKey && field.tagName === 'TEXTAREA') { e.preventDefault(); submitTyped(); }
    });
  }

  function scrollDown() { body.scrollTop = body.scrollHeight; }

  function bubble(from, content, instant) {
    var row = h('div', 'bxc__row bxc__row--' + from);
    var b = h('div', 'bxc__msg');
    if (typeof content === 'string') { b.textContent = content; } else { b.appendChild(content); }
    row.appendChild(b);
    body.appendChild(row);
    scrollDown();
    return row;
  }

  function typing() {
    var row = h('div', 'bxc__row bxc__row--bot bxc__typing');
    var b = h('div', 'bxc__msg');
    b.innerHTML = '<i></i><i></i><i></i>';
    b.setAttribute('aria-label', 'Bixtron is typing');
    row.appendChild(b); body.appendChild(row); scrollDown();
    return row;
  }

  function summaryNode() {
    var d = state.data, o = officeById(d.office);
    var rows = [
      ['Name', d.name], ['Topic', topicLabel(d.topic)], ['Product area', d.category], ['Product', d.product],
      ['Company', d.company], ['Office', o ? o.label : 'Other' + (d.country ? ' (' + d.country + ')' : '')],
      [d.method === 'phone' ? 'Phone' : 'Email', d.contact], ['Message', d.details]
    ];
    var dl = h('dl', 'bxc__sum');
    rows.forEach(function (r) { if (r[1]) { dl.appendChild(h('dt', null, r[0])); dl.appendChild(h('dd', null, r[1])); } });
    return dl;
  }

  /* ---------------------------------------------------------------- flow */
  function currentStep() {
    while (state.step < steps.length && steps[state.step].skip && steps[state.step].skip()) { state.step++; }
    return steps[state.step];
  }

  function setControls(step) {
    chipsBox.innerHTML = '';
    errorEl.textContent = '';
    var hasInput = !!step.input;
    form.hidden = !hasInput;
    if (hasInput) {
      var type = typeof step.input === 'function' ? step.input() : step.input;
      var wantTextarea = type === 'textarea';
      if ((field.tagName === 'TEXTAREA') !== wantTextarea) {
        var nf = h(wantTextarea ? 'textarea' : 'input', 'bxc__field');
        if (!wantTextarea) { nf.type = type; }
        form.replaceChild(nf, field); field = nf;
        field.addEventListener('keydown', function (e) {
          if (e.key === 'Enter' && !e.shiftKey && field.tagName === 'TEXTAREA') { e.preventDefault(); submitTyped(); }
        });
      }
      if (!wantTextarea) { field.type = type; }
      if (wantTextarea) { field.rows = 3; }
      field.value = '';
      field.placeholder = typeof step.ph === 'function' ? step.ph() : (step.ph || '');
      var ac = typeof step.ac === 'function' ? step.ac() : (step.ac || 'off');
      field.setAttribute('autocomplete', ac);
      field.setAttribute('aria-label', field.placeholder);
      field.setAttribute('inputmode', type === 'tel' ? 'tel' : (type === 'email' ? 'email' : 'text'));
    }
    if (step.chips) {
      step.chips().forEach(function (c) {
        var b = h('button', 'bxc__chip' + (c.primary ? ' bxc__chip--primary' : ''), c.label);
        b.type = 'button';
        b.addEventListener('click', function () { answer(c.value, c.label); });
        chipsBox.appendChild(b);
      });
    }
  }

  function focusField(force) {
    if (form.hidden) { return; }
    if (!force && !popup) { return; }
    try { field.focus({ preventScroll: true }); } catch (e) { field.focus(); }
  }

  function ask(replay) {
    var step = currentStep();
    if (!step) { return; }
    var lines = step.ask();
    var i = 0;
    busy = true;
    chipsBox.innerHTML = ''; form.hidden = true; errorEl.textContent = '';
    (function next() {
      if (i >= lines.length) {
        if (step.summary) { bubble('bot', summaryNode()); }
        busy = false;
        setControls(step);
        focusField(false);
        return;
      }
      var line = lines[i++];
      if (replay || REDUCED) { bubble('bot', line); state.log.push({ f: 'bot', t: line }); next(); return; }
      var t = typing();
      setTimeout(function () {
        if (t.parentNode) { t.parentNode.removeChild(t); }
        bubble('bot', line); state.log.push({ f: 'bot', t: line }); save();
        next();
      }, Math.min(900, 350 + line.length * 9));
    })();
  }

  function answer(value, label) {
    if (busy) { return; }
    var step = currentStep();
    if (!step) { return; }
    var shown = step.summary ? label : (label != null && label !== '' ? label : (value === '' ? 'Skip' : value));
    bubble('user', shown); state.log.push({ f: 'user', t: shown });
    if (step.summary) { if (value === 'restart') { restart(); } else { send(); } return; }
    step.apply(value);
    state.step++;
    save();
    ask(false);
  }

  function submitTyped() {
    if (busy) { return; }
    var step = currentStep();
    if (!step || !step.input) { return; }
    var v = field.value.trim();
    if (!v && step.optional) { answer('', 'Skip'); return; }
    var err = step.validate ? step.validate(v) : '';
    if (err) { errorEl.textContent = err; field.focus(); return; }
    answer(v, v);
  }

  function waLink() {
    var d = state.data, o = officeById(d.office) || cfg.offices[0];
    var t = 'Hello Bixtron, this is ' + d.name + '. ' + topicLabel(d.topic) + (d.category ? ' (' + d.category + ')' : '') + ': ' + d.details;
    return 'https://wa.me/' + o.wa + '?text=' + encodeURIComponent(t);
  }

  function send() {
    busy = true; chipsBox.innerHTML = ''; form.hidden = true;
    var t = typing();
    var d = state.data;
    var payload = {
      name: d.name, company: d.company || '', topic: d.topic, category: d.category || '', details: d.details,
      office: d.office, country: d.country || '', method: d.method, contact: d.contact,
      product: d.product || (cfg.product ? cfg.product.name : ''), page: location.href, hp: '', t: Date.now() - T0
    };
    fetch(cfg.rest, { method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify(payload) })
      .then(function (r) { return r.json().then(function (j) { return { ok: r.ok, j: j }; }); })
      .then(function (res) {
        if (t.parentNode) { t.parentNode.removeChild(t); }
        if (res.ok && res.j && res.j.ok) { finish(res.j); } else { fail((res.j && res.j.message) || 'Something went wrong.'); }
      })
      .catch(function () { if (t.parentNode) { t.parentNode.removeChild(t); } fail('We couldn’t reach the server.'); });
  }

  function linkChip(label, href, cls, blank) {
    var a = h('a', 'bxc__chip ' + (cls || ''), label); a.href = href;
    if (blank) { a.target = '_blank'; a.rel = 'noopener'; }
    return a;
  }

  function finish(j) {
    var d = state.data, o = officeById(d.office);
    var city = o ? o.city : 'Nairobi';
    var msg = 'Thank you, ' + firstName(d.name) + '! Your enquiry ' + j.ref + ' is with our ' + (o ? city + ' team' : 'team') + '. We usually reply within one business day.';
    bubble('bot', msg); state.log.push({ f: 'bot', t: msg });
    state.done = true; state.ref = j.ref; save();
    busy = false;
    chipsBox.innerHTML = ''; form.hidden = true;
    chipsBox.appendChild(linkChip('Continue on WhatsApp', waLink(), 'bxc__chip--wa', true));
    chipsBox.appendChild(linkChip('Browse products', cfg.shop, ''));
    var again = h('button', 'bxc__chip', 'New enquiry'); again.type = 'button'; again.addEventListener('click', restart);
    chipsBox.appendChild(again);
  }

  function fail(message) {
    var msg = message + ' Your answers are saved; you can try again or message us on WhatsApp.';
    bubble('bot', msg); state.log.push({ f: 'bot', t: msg }); save();
    busy = false; form.hidden = true; chipsBox.innerHTML = '';
    var retry = h('button', 'bxc__chip bxc__chip--primary', 'Try again'); retry.type = 'button'; retry.addEventListener('click', send);
    chipsBox.appendChild(retry);
    chipsBox.appendChild(linkChip('WhatsApp us', waLink(), 'bxc__chip--wa', true));
  }

  function restart() {
    state = { step: 0, data: {}, log: [], done: false, ref: '' };
    try { sessionStorage.removeItem(KEY); } catch (e) { /* ignore */ }
    body.innerHTML = ''; T0 = Date.now(); busy = false;
    ask(false);
  }

  function replay() {
    state.log.forEach(function (m) { bubble(m.f, m.t); });
    var step = currentStep();
    if (state.done) {
      busy = false; chipsBox.innerHTML = ''; form.hidden = true;
      chipsBox.appendChild(linkChip('Continue on WhatsApp', waLink(), 'bxc__chip--wa', true));
      var again = h('button', 'bxc__chip', 'New enquiry'); again.type = 'button'; again.addEventListener('click', restart); chipsBox.appendChild(again);
      return;
    }
    if (!step) { restart(); return; }
    if (step.summary) { bubble('bot', summaryNode()); }
    busy = false; setControls(step);
  }

  function start() {
    if (state.log.length) { replay(); } else { ask(false); }
  }

  /* ---------------------------------------------------------------- popup behaviour */
  var fab, lastFocus;
  function open() {
    if (!popup || panelOpen) { return; }
    panelOpen = true; lastFocus = document.activeElement;
    root.hidden = false;
    requestAnimationFrame(function () { root.classList.add('is-open'); });
    document.documentElement.classList.add('bx-chat-open');
    if (fab) { fab.setAttribute('aria-expanded', 'true'); fab.classList.add('is-open'); }
    if (!body.childNodes.length) { start(); }
    setTimeout(function () { focusField(true); scrollDown(); }, 60);
  }
  function close() {
    if (!popup || !panelOpen) { return; }
    panelOpen = false;
    root.classList.remove('is-open');
    document.documentElement.classList.remove('bx-chat-open');
    setTimeout(function () { if (!panelOpen) { root.hidden = true; } }, REDUCED ? 0 : 220);
    if (fab) { fab.setAttribute('aria-expanded', 'false'); fab.classList.remove('is-open'); fab.focus({ preventScroll: true }); }
  }
  function toggle() { if (panelOpen) { close(); } else { open(); } }

  /* ---------------------------------------------------------------- init */
  function init() {
    var inline = document.getElementById('bx-chat-inline');
    if (inline) {
      inline.innerHTML = '';
      build(inline, false);
      start();
      window.bxChatReady = true;
      return;
    }
    fab = document.getElementById('bx-fab');
    if (!fab) { return; }
    var wrap = h('div', 'bxc-wrap');
    document.body.appendChild(wrap);
    build(wrap, true);
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && panelOpen) { close(); } });
    window.bxChatToggle = toggle;
    window.bxChatReady = true;
    if (window.__bxOpenPending) { window.__bxOpenPending = false; open(); }
  }

  if (document.readyState === 'loading') { document.addEventListener('DOMContentLoaded', init); } else { init(); }
})();
