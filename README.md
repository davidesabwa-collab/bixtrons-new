# Bixtron Safety Handlers - new.bixtrons.com theme

WordPress child theme of **Hello Elementor** for **Bixtron Safety Handlers Ltd** (Nairobi, Kenya and Kampala, Uganda).
The layout is PIP-style (hero, brand wall, category tiles, red/black palette); all content, logos, products,
brands and contact details are Bixtron's, taken from https://bixtrons.com.

## What is in the theme

| Area | Files |
|---|---|
| Home | `front-page.php`, `template-parts/content-home.php` (hero, brands, categories, featured products, services, certifications, offices) |
| Company pages | `template-parts/content-{about,contact,our-locations,quality-certifications,legal}.php`, routed by slug in `page.php` |
| Shop (WooCommerce) | `woocommerce.php` (shop + product), `taxonomy-product_cat.php` (category landing), `inc/bixtron-woocommerce.php` |
| Company data | `inc/bixtron-data.php` - one place for offices, phones, emails, socials, brands, certifications |
| Page auto-creation | `inc/bixtron-pages.php` - creates About, Contact, Our Locations, Quality & Certifications, Legal if missing |
| Styles | PIP CSS untouched in `assets/css/`; Bixtron additions in `assets/css/bixtron.css`; font aliases in `assets/css/bixtron-fonts.css` |
| Logos / brands | `assets/images/bixtron/` (logo, white logo, red-tab SVG, emblem, favicons, brand logos) |

Edit contact details, brands and certifications in `inc/bixtron-data.php`; products and categories are managed in WooCommerce.

## Colours (from the Bixtron logo)
Blue `#1973ac` is the primary colour (header tab, buttons, banners), green `#2bac4d` marks WhatsApp actions, ticks and certificates, red `#ed1e24` accents the hero headline, grey `#5f6060` matches the logo text. PIP's red was replaced in the PIP stylesheets; the hero wedge and brand banner images were recoloured to blue.

## Shop behaviour
- Catalogue (220 products) comes live from WooCommerce; categories and counts update automatically.
- No product has a public price, so each product offers **Order via WhatsApp** and **Add to Quote** (YITH Request a Quote). Cart and checkout stay fully active for when prices are added.
- Required plugins: WooCommerce, Contact Form 7, YITH WooCommerce Request a Quote (optional: Order on WhatsApp plugin).

## Fonts
PIP's Adobe Typekit fonts are not used. `bixtron-fonts.css` maps the font names the CSS asks for to self-hosted Roboto, Roboto Condensed and Anton.

## Deployment
Every `git push origin main` runs `.github/workflows/deploy.yml`: PHP lint, zip, POST to `auto_deploy.php`, Cloudflare purge, smoke test.
**Pushes to `main` go live immediately.** Work on a branch and merge when ready.
Secrets: `DEPLOY_TOKEN`, `CF_ZONE_ID`, `CF_API_TOKEN`.
`.cpanel.yml` is a second route that copies the repo into `/home/bixtrons/public_html/new/wp-content/themes/hello-elementor-pip/`.

## Checklist before go-live
1. Import the WooCommerce database (`new_bixtrons_database.sql`, prefix `wpke_`) so `new.bixtrons.com` stops redirecting to `/wp-admin/install.php`, and make sure `wp-content/uploads` and the plugins above are on the server.
2. Replace the placeholder text on the Privacy Policy, FAQ, Support, Payment and Refund pages (they still contain WordPress/Lorem ipsum filler on bixtrons.com).
3. Replace the remaining PIP photographs (hero background `wwpie-hero-background.webp`, brand section backgrounds in `assets/images/brands/`) with Bixtron imagery.
