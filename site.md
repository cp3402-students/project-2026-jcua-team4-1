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
