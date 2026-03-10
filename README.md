# Sikandar's Developer Portfolio — Custom WordPress Theme

![WordPress](https://img.shields.io/badge/WordPress-6.4+-21759B?logo=wordpress)
![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?logo=php)
![Vanilla CSS](https://img.shields.io/badge/CSS3-Vanilla-1572B6?logo=css3)

A **fully custom WordPress portfolio theme** designed and coded from scratch. This theme serves as my professional developer portfolio, showcasing my skills, experience, and custom-built projects.

Unlike typical WordPress sites, this portfolio **does not use Elementor, Divi, or any page builder**. Every line of HTML, CSS, and PHP is handwritten to ensure maximum performance, pixel-perfect design, and a premium user experience.

---

## ✅ What Was Built

### 🎨 Design & Frontend
| Feature | Status |
|---------|--------|
| Custom Dark-Theme UI with glowing accents | ✅ Done |
| Fully responsive layout (Mobile, Tablet, Desktop) | ✅ Done |
| Hero Section featuring dynamic intro and social links | ✅ Done |
| Custom "Skills" Grid with SVG icons | ✅ Done |
| Hover micro-animations on cards and buttons | ✅ Done |
| Clean, semantic HTML structure | ✅ Done |
| Native Vanilla CSS using modern variables (`var(--primary)`) | ✅ Done |

### ⚙️ WordPress Integration (Backend)
| Feature | Status |
|---------|--------|
| Custom Post Type: `project` for portfolio items | ✅ Done |
| Dynamic "Recent Projects" grid fetching from database | ✅ Done |
| Custom Metaboxes for projects (GitHub Link, Live Demo Link, Tags) | ✅ Done |
| Dynamic rendering of Project Categories | ✅ Done |
| Custom WP Query loops in `index.php` | ✅ Done |
| Enqueued scripts and styles cleanly via `functions.php` | ✅ Done |

### ⚡ Performance & Security (Custom MU-Plugins)
| Optimization | Status |
|---|---|
| Zero bloat — no heavy frontend frameworks | ✅ Done |
| `.htaccess` optimization (GZIP + Browser Caching for 1 year) | ✅ Done |
| XMLRPC disabled (Stops brute-force attacks) | ✅ Done |
| Emoji scripts removed (reduces unnecessary HTTP requests) | ✅ Done |
| Custom Security Login URL (`/sk-secure-login`) | ✅ Done |
| Database auto-cleanup cron jobs | ✅ Done |
| Limit Login Attempts (Custom code, no plugin) | ✅ Done |
| Open Graph tags + custom dynamic SEO meta | ✅ Done |

---

## 💻 Showcased Projects
This portfolio dynamically displays my best work. The current flagship projects include:

1. **SK Fashion (WooCommerce):** A fully custom e-commerce clothing store theme with cart/checkout overrides and optimized buying flows.
2. **SK Blog (Next.js Headless WP):** A modern full-stack application using WordPress strictly as a headless CMS and Next.js 14 for the frontend, complete with JWT Authentication and a rich text editor.

---

## 🗂️ Theme Structure

```
sikandar-theme/
├── style.css             # Theme registration and primary core styles
├── index.php             # Main portfolio layout and WP Queries
├── functions.php         # Enqueues, CPT registration, Custom login logo
├── header.php            # Head tags, navigation, hero section
├── footer.php            # Footer, copyright, closing tags
└── assets/
    ├── css/              # Modular stylesheets 
    └── images/           # Badges, icons, and static assets
```

---

## 🚀 Local Setup Instructions

1. Install a fresh copy of WordPress.
2. Clone this repository into your themes folder: `wp-content/themes/sikandar-theme`.
3. Activate the theme from WP Admin > Appearance > Themes.
4. Add the following code to a Must-Use plugin (`mu-plugins`) or directly into `functions.php` to register the `project` Custom Post Type if it's not already running:
   *(Note: CPT registration is typically handled via a custom plugin for portability, but the frontend requires it).*
5. Create a few `project` posts, assign Featured Images, and fill out the custom metadata fields (Live Demo url, GitHub url, Tags).

---

## 👨‍💻 Author

**Sikandar Abbas** — Full-Stack WordPress & Next.js Developer  
[GitHub](https://github.com/Sikandar-7) | [LinkedIn](#)
