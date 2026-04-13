# Site Maintenance Guide

This document is for whoever is maintaining the Tennis Blast Kalynda Chase 
WordPress website. It assumes you are familiar with WordPress basics. It 
explains how this specific site is organised and how to manage its content.



## 1. Site Overview

The site is for Tennis Blast Kalynda Chase, a tennis coaching business 
based at 47-59 Kalynda Parade, Townsville, QLD. The site gives visitors 
information about coaching classes, social tennis, venue hire, the pro 
shop, and allows them to book a session online.

**Production site:** http://3.106.246.239/  
**Staging site:** http://54.253.97.247/  
**WordPress admin:** http://54.253.97.247/wp-admin



## 2. How the Site Is Organised

This site uses **Pages** for all main content. It does not use Posts or 
a blog. Every section of the site is a separate page with its own custom 
template.

| Page | Template Used | What It Contains |
|------|--------------|-----------------|
| Home | `front-page.php` | Hero section, image slider, intro content |
| Classes | `page-classes.php` | All coaching class types and details |
| Social Tennis | `page-social-tennis.php` | Social events and casual play info |
| Venue Hire & Events | `page-venue-hire-events.php` | Venue booking info and events |
| Contact | `page-contact.php` | Contact form and business details |
| Coaches | `page-coaches.php` | Coach profiles and bios |
| Pro Shop | `page-pro-shop.php` | Equipment and products available |
| Book Online | `page-class-book.php` | Hidden booking page with calendar |



## 3. Pages vs Posts — What This Site Uses

**This site uses Pages only. Do not use Posts for main content.**

- **Pages** are for permanent content that does not change often — 
  Classes, Contact, Coaches, Pro Shop etc. All main sections of this 
  site are pages.
- **Posts** are for blog-style content that is dated and regularly 
  updated. This site does not have a blog, so posts are not used.


If the client wants to add news updates or announcements in the future, 
Posts could be used for that — but for now, stick to Pages.(


## 4. How to Edit an Existing Page

1. Log in to the WordPress admin at `http://54.253.97.247/wp-admin`
2. Go to **Pages** in the left sidebar
3. Find the page you want to edit and click on it
4. Edit the content in the WordPress editor
5. Click **Update** to save your changes
6. Visit the page on the live site to confirm it looks correct

> **Important:** Do not change the **Template** assigned to each page 
> under Page Attributes. Each page relies on its specific custom template 
> for its layout. Changing the template will break the page design.
---

## 5. How to Edit Specific Pages

### Home Page
The homepage has three main areas you can edit:

*Hero section* (the big image with "Believe – Learn – Achieve – Succeed"):
- The hero text and button labels are editable in the 
  *Home* page editor
- The hero background image can be changed via the page editor or 
  through *Appearance → Customize*

*Image Slider:*
- The slider images are managed through the *Home* page editor
- To replace a slider image, click on the image in the editor and 
  upload a new one from the Media Library
- Keep images at a consistent size for best results — landscape 
  orientation works best (recommended: 1024x600px or similar)
- The slider supports up to 4 images

*Footer content* (Contact, Office Hours, Court Hire):
- The footer details are edited in the footer.php template file
- To change the phone number, email, address, office hours, or court 
  hire info — edit footer.php directly and redeploy
- These details are: phone 0421 177 764, email 
  kalyndachasetennis@outlook.com, address 47-59 Kalynda Parade, TSV

### Classes Page
- Edit class names, descriptions, and pricing directly in the 
  *Classes* page editor in WordPress admin
- The layout is controlled by page-classes.php

### Coaches Page
- Each coach has a profile section with a photo and bio
- To update a coach profile, edit the *Coaches* page in the 
  WordPress admin
- To replace a coach photo, upload the new image to the Media Library 
  first, then insert it into the page

### Contact Page
- The contact details displayed on this page are editable in the 
  *Contact* page editor
- The contact form is powered by *WPForms* — see Section 7 for 
  how to manage it

### Pro Shop Page
- Products and descriptions are added directly in the *Pro Shop* 
  page editor
- This is not a WooCommerce shop — it is a simple content page 
  listing available equipment

---

## 6. The Book Online Page (Hidden Page)

The *Book Online* page is not visible in the navigation menu. It is 
only accessible when someone clicks:
- The *"Book a Session"* button in the top navigation bar
- The *"Book a Court Now"* button on the homepage hero section

*What the page contains:*
- Four class type cards: Hot Shots (Ages 3–14), Squad Training 
  (All levels), Private Classes (1-on-1), Tournament Travel (Juniors)
- An interactive calendar showing available and unavailable dates
- A booking request form collecting the user's name and details

*To edit the booking page:*
1. Go to *Pages → Book Online* in the WordPress admin
2. Edit the class names, descriptions, or form content as needed
3. Click *Update*

*To change available dates on the calendar:*
- The available dates are controlled by the JavaScript in the js/ 
  folder inside the theme
- To update which dates are available, a developer will need to edit 
  the JS file and redeploy the theme
- This is not manageable from the WordPress admin alone

*Do not add this page to the navigation menu.* It is intentionally 
hidden and accessed only through the CTA buttons.

## 7. WPForms — Contact Form Management

The contact form on the *Contact* page is built using the *WPForms* 
plugin. Here is how to manage it.

### To view form submissions:
1. Go to *WPForms → Entries* in the WordPress admin
2. Select the contact form to see all submitted entries
3. Each entry shows the name, email, and message submitted

### To edit the contact form:
1. Go to *WPForms → All Forms*
2. Click *Edit* on the contact form
3. You can add, remove, or rearrange fields using the drag-and-drop 
   builder
4. Click *Save* when done

### To change where form submissions are sent:
1. Open the form in the WPForms editor
2. Go to *Settings → Notifications*
3. Update the email address in the *Send To Email Address* field
4. Click *Save*

### Important:
- Do not delete the WPForms plugin — the contact form will disappear 
  from the Contact page if you do
- The form is embedded in the Contact page using a WPForms shortcode. 
  If the form disappears from the page, check that the shortcode is 
  still present in the *Contact* page editor

---

## 8. All-in-One WP Migration — Backups and Restores

The *All-in-One WP Migration* plugin is used to back up and restore 
the site. Use this whenever you need to move content between environments 
or take a backup before making major changes.

### To create a backup:
1. Go to *All-in-One WP Migration → Export*
2. Select *Export to → File*
3. Download the .wpress file and store it safely

### To restore from a backup:
1. Go to *All-in-One WP Migration → Import*
2. Upload the .wpress backup file
3. Wait for the import to complete
4. Go to *Settings → Permalinks* and click *Save Changes* — this 
   step is important and must not be skipped

> *Warning:* Importing a backup will overwrite all current content on 
> the site. Make sure you export a fresh backup first before importing 
> anything.

---

## 9. Navigation Menu Management

The site has one main navigation menu with these items:
- Home
- Classes
- Social Tennis
- Venue Hire & Events
- Contact
- Coaches
- Pro Shop
- Book a Session (styled as a gold button — this is a custom CSS class)

### To add or remove a menu item:
1. Go to *Appearance → Menus*
2. Select the *Primary Menu*
3. Add pages from the left panel or drag to reorder
4. Click *Save Menu*

### Important:
- *Do not add the Book Online page to the menu.* It is intentionally 
  hidden and accessed only through CTA buttons
- The *"Book a Session"* button in the nav has a custom CSS class 
  applied to it that gives it the gold button style. If you remove and 
  re-add it, make sure to reapply the CSS class book-session-btn in 
  the menu item's *CSS Classes* field under *Screen Options*

---

## 10. Adding New Images and Media

- All images must be licensed for commercial use before uploading
- Upload images through *Media → Add New* in the WordPress admin
- For the homepage slider, keep images landscape orientation and 
  consistent in size
- For coach profile photos, use square or portrait images for 
  best results
- Do not upload very large image files — compress images before 
  uploading to keep the site loading fast (recommended: under 500KB 
  per image)

---

## 11. Footer Details

The footer shows three columns of information that the client may need 
updated from time to time:

| Column | Current Content |
|--------|----------------|
| Contact | 0421 177 764, kalyndachasetennis@outlook.com, 47-59 Kalynda Parade TSV |
| Office Hours | Mon–Thu 1:00pm–9:00pm, Fri 1:00pm–7:30pm, Sat 7:00am–11:00am & 3:00pm–6:30pm, Sun 3:30pm–6:30pm |
| Court Hire | Available 24/7, 10 courts available, Book Now button |

To update footer content, a developer needs to edit footer.php in 
the theme and redeploy. This cannot be changed from the WordPress admin.
