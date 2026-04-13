# Theme Documentation

This document explains the `kc-blast-theme` to a developer who is taking 
over or continuing development. Read this before touching any theme files.



## 1. Theme Overview

- **Theme Name:** KC Blast Theme
- **Folder Name:** `kc-blast-theme`
- **Built From:** Underscores (_s) starter theme
- **WordPress Site:** Tennis Blast Kalynda Chase — a tennis coaching 
  business based in Townsville, QLD
- **Purpose:** Provide information about coaching classes, allow users to 
  book sessions, and give the club an online presence



## 2. Theme Features

- Full-width hero section on the homepage with overlay text and two 
  call-to-action buttons
- Sticky navigation bar with logo, main menu links, and a highlighted 
  "Book a Session" button
- Image slider on the homepage (built with plain JS — no plugin)
- Seven custom page templates for each section of the site
- One hidden booking page (`page-class-book.php`) with an interactive 
  calendar and session selector
- Dark navy footer with three columns: Contact, Office Hours, Court Hire
- Responsive design — works on mobile, tablet, and desktop
- WPForms plugin used for the contact form on the Contact page



## 3. Colour Scheme and Fonts

These colours are defined in `style.css` and used consistently across 
all templates. Do not hardcode these hex values in individual templates — 
always reference the CSS variables or classes defined in `style.css`.

| Element | Colour |
|---------|--------|
| Background (dark sections, nav, footer) | Dark navy `#12172b` |
| Primary button (Book a Session, Book Now) | Gold/yellow `#f5c518` |
| Accent text (taglines, highlights) | Green `#4caf50` |
| Body text on dark backgrounds | White `#ffffff` |
| Body text on light backgrounds | Dark grey |
| Page background | Light grey `#f4f4f4` |

**Font:** The theme uses the default WordPress/system font stack. No 
external Google Fonts are loaded to keep the site fast.



