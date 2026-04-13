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
