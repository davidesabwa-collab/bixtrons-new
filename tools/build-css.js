/*
 * Builds assets/css/pip-lite.min.css from tools/css-src: PIP's four large stylesheets (bootstrap, channel, pip-main, style.min)
 * trimmed to the rules the Bixtron pages actually use, then minified.
 *
 * Usage (from a folder that has purgecss + csso installed):
 *   HTML_DIR=/path/to/crawled/html NODE_PATH=/path/to/node_modules node tools/build-css.js
 *
 * HTML_DIR holds rendered pages (home, shop, category, product, about, contact ...). Rules are kept when their
 * class/id/tag appears in those pages, in the PHP templates, or in the theme JavaScript (so classes that
 * JavaScript adds later, like menu-open, are kept). Pseudo-classes (:hover etc.) and media queries are preserved.
 */
const fs = require('fs');
const path = require('path');
const { PurgeCSS } = require('purgecss');
const csso = require('csso');

const root = path.resolve(__dirname, '..');
const cssDir = path.join(root, 'assets/css');
const srcDir = path.join(root, 'tools/css-src');
const htmlDir = process.env.HTML_DIR;
if (!htmlDir) { console.error('Set HTML_DIR to the folder of crawled pages'); process.exit(1); }

const sources = ['bootstrap.css', 'channel.min.css', 'pip-main.css', 'style.min.css'];
const content = [
  { raw: '', extension: 'html' },
  ...fs.readdirSync(htmlDir).filter(f => f.endsWith('.html')).map(f => path.join(htmlDir, f)),
  path.join(root, '*.php'), path.join(root, 'template-parts/*.php'), path.join(root, 'inc/*.php'),
  path.join(root, 'assets/js/pip-theme.js'), path.join(root, 'assets/js/bixtron-chat.js'),
];

(async () => {
  let all = '';
  let before = 0;
  for (const f of sources) {
    const css = fs.readFileSync(path.join(srcDir, f), 'utf8');
    before += css.length;
    const res = await new PurgeCSS().purge({
      content,
      css: [{ raw: css }],
      keyframes: true,
      fontFace: false,
      variables: false,
      safelist: {
        standard: ['html', 'body'],
        greedy: [/^menu-open$/, /^mobile-open$/, /^is-active$/, /^active$/, /^open$/, /^show$/, /^in$/, /^visible$/, /^scrolled$/, /^sticky$/, /^slide-/, /^animation-element$/],
      },
    });
    all += '\n/* ' + f + ' */\n' + res[0].css;
  }
  const min = csso.minify(all, { restructure: true }).css;
  fs.writeFileSync(path.join(cssDir, 'pip-lite.min.css'), min);
  console.log('PIP CSS: ' + (before / 1024).toFixed(0) + ' KB -> ' + (min.length / 1024).toFixed(1) + ' KB (pip-lite.min.css)');
})();
