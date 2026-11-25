# Bixtrons Safety Handlers — PIP Global Mirror Theme & Live Deployment Pipeline

A high-fidelity WordPress child theme for **Hello Elementor**, meticulously mirrored from **PIP Global** (`pipglobal.com`) for **Bixtron Safety Handlers Ltd**.

---

## 🚀 Overview

- **Theme Name**: `Hello Elementor Child - PIP Global Replica` (`hello-elementor-pip`)
- **Parent Theme**: `Hello Elementor`
- **Target Live Domain**: `new.bixtrons.com`
- **Primary Domain**: `bixtrons.com`
- **Server IP**: `94.72.107.251` (SERVER1 / EliteHost Cloud)

---

## 📄 Pages Included (15 Complete Mirrored Templates)

1. **Homepage** (`front-page.php`)
   - PIP Global hero with red accent angle and brand badge
   - Multi-brand showcase (PIP, Dynamic, Bouton, QRP, ATG, etc.)
   - Industrial solutions bento grid & streaming video background tiles
   - Global regional network and footer
2. **Careers** (`page-career.php`)
3. **Contact Us** (`page-contact-us.php`)
4. **Our Locations** (`page-our-locations.php`)
5. **Sustainability** (`page-sustainability.php`)
6. **Legal & Compliance** (`page-legal.php`)
7. **Automotive & Metal Fabrication** (`page-automotive-and-metal-fabrication-channel.php`)
8. **Construction Channel** (`page-construction-channel.php`)
9. **Controlled Environment Channel** (`page-controlled-environment-channel.php`)
10. **Electrical Channel** (`page-electricity-channel.php`)
11. **Facility Care & Waste Management** (`page-facility-care-and-waste-management-channel.php`)
12. **Food Processing Channel** (`page-food-processing-channel.php`)
13. **Industrial Channel** (`page-industrial-channel.php`)
14. **Oil & Gas Channel** (`page-oil-and-gas-channel.php`)
15. **Welding Channel** (`page-welding-channel.php`)

---

## 🌐 Subdomain Setup: `new.bixtrons.com`

### 1. DNS Record
In your DNS provider (Cloudflare / cPanel Zone Editor):
- **Type**: `A`
- **Name / Host**: `new`
- **IPv4 Address**: `94.72.107.251`
- **Proxy Status**: DNS Only (or Proxied if using Cloudflare SSL)
- **TTL**: Auto / 14400

### 2. cPanel Subdomain Configuration
In cPanel (`https://bixtrons.com:2083/`):
1. Navigate to **Domains** -> **Create A New Domain** (or **Subdomains**).
2. Enter Domain: `new.bixtrons.com`.
3. Set Document Root: `public_html/new` (or `/home/bixtrons/new.bixtrons.com`).
4. Enable **AutoSSL / Let's Encrypt** in cPanel SSL/TLS Status.

### 3. WordPress Installation on Subdomain
1. Install WordPress in `public_html/new`.
2. Install parent theme **Hello Elementor**.
3. Activate child theme **Hello Elementor Child - PIP Global Replica** (`hello-elementor-pip`).

---

## 🔄 Automated Continuous Deployment (CI/CD)

Every `git push origin main` triggers the GitHub Actions workflow [`.github/workflows/deploy.yml`](.github/workflows/deploy.yml).

### Deployment Methods Supported:

#### Option A: cPanel Git Versioning Webhook (Recommended)
1. In cPanel, navigate to **Git™ Versioning**.
2. Create repository pointing to `https://github.com/davidesabwa-collab/bixtrons-new.git`.
3. Set target directory to `/home/bixtrons/public_html/new/wp-content/themes/hello-elementor-pip`.
4. Copy the cPanel Webhook URL into GitHub Secrets as `CPANEL_WEBHOOK_URL`.

#### Option B: FTP / FTPS Auto-Sync
Add these GitHub Repository Secrets:
- `FTP_SERVER`: `bixtrons.com` or `94.72.107.251`
- `FTP_USERNAME`: cPanel or FTP user
- `FTP_PASSWORD`: FTP user password
- `FTP_TARGET_DIR`: `/public_html/new/wp-content/themes/hello-elementor-pip/`

#### Option C: SSH / Deploy Script
Add these GitHub Repository Secrets:
- `SSH_HOST`: `94.72.107.251`
- `SSH_PORT`: `7202`
- `SSH_USER`: `bixtrons`
- `SSH_KEY`: Deployment private key
- `SSH_PASSPHRASE`: (if key is encrypted)
