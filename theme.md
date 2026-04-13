# Kc-blast-theme — Developer Handover

## Server Details
- **Host:** AWS Lightsail, Sydney Zone A (ap-southeast-2a)
- **IP:** 54.253.97.247
- **OS:** Debian Linux
- **Web Server:** Apache2
- **SSH Access:** Via Lightsail browser-based SSH — no `.pem` key required

---

## Theme Location
```
/var/www/html/wp-content/themes/kc-blast-theme/
```

---

## Key Files & Structure
```
kc-blast-theme/
├── style.css          # Main stylesheet
├── functions.php      # Theme functions
├── header.php         # Header template
├── footer.php         # Footer template
├── front-page.php     # Homepage template
├── 404.php            # Error page
├── archive.php        # Archive page
├── style-rtl.css      # RTL stylesheet
└── js/                # JavaScript files
```

---

## Theme Features
- Active theme on **Tennis Blast Kalynda Chase** WordPress site
- Custom front page template via `front-page.php`
- WPForms plugin integrated for forms

---

## Conventions Used
- File permissions: `775`
- File owner: `www-data:www-data` (required for Apache)
- WordPress installed at `/var/www/html/` (not default Bitnami path)

---

## Important Design Decisions
- Upload limit increased to `512M` via `wp-config.php` and `php.ini`
- Config file located at `/var/www/wp-config.php`
- 1GB swap file added at `/swapfile` to prevent out-of-memory crashes

---

## Non-Obvious Things ⚠️
- Server has **limited RAM** — always monitor memory usage
- There are **3 Lightsail instances** on this account — always verify the correct server before running commands:

| Instance | IP |
|---|---|
| Tennis | 54.253.97.247 |
| Deploymentsite | 3.25.197.137 |
| Deployement | 3.106.246.239 |

- If site shows a **white screen**, check Apache: `sudo service apache2 status`
- If **OOM errors** appear in logs, restart Apache: `sudo service apache2 restart`
- Check logs at: `sudo tail -50 /var/log/apache2/error.log`
