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
## 4. Key Files and Folder Structure

```
kc-blast-theme/
│
├── style.css               — Main stylesheet, theme metadata lives here
├── style-rtl.css           — Right-to-left language support (from _s)
├── index.php               — Fallback template (required by WordPress)
├── front-page.php          — Homepage template
├── header.php              — Site header, nav bar, logo
├── footer.php              — Site footer, 3-column layout
├── page.php                — Default page template
├── single.php              — Single blog post template
├── archive.php             — Archive/blog listing template
├── search.php              — Search results template
├── sidebar.php             — Sidebar (registered but not used on most pages)
├── comments.php            — Comments template (from _s)
├── 404.php                 — Custom 404 error page
├── functions.php           — Theme setup, menus, scripts, styles
├── composer.json           — Dependency config (from _s)
├── phpcs.xml.dist          — PHP coding standards config
│
├── page-classes.php        — Custom template: Classes page
├── page-contact.php        — Custom template: Contact page
├── page-coaches.php        — Custom template: Coaches page
├── page-pro-shop.php       — Custom template: Pro Shop page
├── page-social-tennis.php  — Custom template: Social Tennis page
├── page-venue-hire-events.php — Custom template: Venue Hire & Events page
├── page-class-book.php     — Custom template: Book Online (hidden page)
│
├── inc/                    — Additional PHP includes (from _s structure)
├── js/                     — Custom JavaScript files
├── assets/                 — Images and other static assets
├── template-parts/         — Reusable template parts
└── languages/              — Translation files
**Font:** The theme uses the default WordPress/system font stack. No 
external Google Fonts are loaded to keep the site fast.
--

## 5. Custom Page Templates

Each page on the site uses a dedicated custom template. This keeps the 
layout of each page separate and easy to edit without affecting other pages.

To assign a template to a page in WordPress:
1. Go to *Pages* in the WordPress admin
2. Open the page you want
3. In the right sidebar under *Page Attributes*, select the template 
   from the *Template* dropdown
4. Click *Update*

| Template File | Page It Is Used For | Notes |
|---------------|---------------------|-------|
| front-page.php | Home | Hero section, image slider, intro content |
| page-classes.php | Classes | Lists all coaching class types |
| page-contact.php | Contact | WPForms contact form embedded here |
| page-coaches.php | Coaches | Coach profiles and bios |
| page-pro-shop.php | Pro Shop | Shop/product listing page |
| page-social-tennis.php | Social Tennis | Social events info |
| page-venue-hire-events.php | Venue Hire & Events | Venue details and event bookings |
| page-class-book.php | Book Online | Hidden booking page — see Section 7 |



## 6. JavaScript Files

Custom JS is stored in the js/ folder and enqueued through functions.php.
Do not add <script> tags directly into template files.

The JS handles:
- *Mobile navigation toggle* — shows/hides the nav menu on small screens 
  when the hamburger icon is tapped
- *Image slider on the homepage* — cycles through photos with previous/next 
  arrow buttons and dot indicators at the bottom
- *Book a Session page interactions* — handles class type selection, 
  calendar date highlighting (available/selected/unavailable), and shows 
  available time slots dynamically when a date is clicked

All JS is plain vanilla JavaScript — no jQuery or external libraries are used.



## 7. The Hidden Booking Page (page-class-book.php)

The *Book Online* page (page-class-book.php) is a custom template that 
is intentionally hidden from the navigation menu. It is only accessible 
when a user clicks the *"Book a Session"* button in the navigation bar 
or the *"Book a Court Now"* button on the homepage hero section.

### What it contains:
- Four class type selector cards: Hot Shots (Ages 3–14), Squad Training 
  (All levels), Private Classes (1-on-1), Tournament Travel (Juniors)
- An interactive calendar showing available, selected, and unavailable dates
- A time slot panel that updates when a date is selected
- A booking request form at the bottom collecting name and other details

### Why it is hidden from the menu:
The page is excluded from the primary navigation menu in WordPress by 
simply not adding it to the menu under *Appearance → Menus*. The page 
still exists and is publicly accessible via its URL — it is just not 
listed in the nav.

### To edit the booking page:
Go to *Pages → Book Online* in the WordPress admin and edit the content 
there. The layout is controlled by page-class-book.php and styled 
in style.css.



