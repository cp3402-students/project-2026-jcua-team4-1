# Tennis Coach WordPress Website — CP3402 Project 2026

## Project Overview

This repository contains the source code and documentation for a professional 
WordPress website built for a tennis coach who teaches students of all skill 
levels. The site serves as the coach's main online presence providing 
information about coaching services, class schedules, skill levels taught, 
and how prospective students can get in touch or sign up.

The website is designed to be clean, professional, and easy to navigate for 
anyone looking for tennis coaching in the local area. The goal of the site is 
to clearly communicate what the coach offers and encourage visitors to take 
action  whether that is booking a class, making an enquiry, or learning more 
about the coaching philosophy.

This project was completed as part of CP3402 Content Management Systems at 
James Cook University, Semester 1, 2026. The focus of the project was not 
only building the website itself, but following a professional development 
and deployment workflow  including version control, multi-environment 
deployment, project management, and thorough documentation.


## Repository

**GitHub Classroom Repository:**  
https://github.com/cp3402-students/project-2026-jcua-team4-1


## Team

| Name     
|----------
| Sushmoy  
| Ornysha  
| Ramiz 
| Kenny



## Site Environments

This project follows a three-environment workflow to ensure changes are 
tested before they go live to the public.

| Environment | URL | Purpose |
|-------------|-----|---------|
| Local | http://localhost/kc-tennis-blast/| Active development using XAMPP |
| Staging | http://54.253.97.247/ | Testing and client review before going live |
| Production | http://3.106.246.239/ | Live public-facing website |

*Local* is where all development happens first. Each team member runs 
WordPress locally using XAMPP on their own machine. This allows us to write 
and test code safely without affecting anything public.

*Staging* is a live server on AWS that mirrors production. Before any 
change goes to the production site, it is deployed to staging first and 
reviewed. This is where the client can preview updates.

*Production* is the final live website that the public and the client can 
see. Only approved, tested changes are deployed here.


## Technology Stack

| Tool / Technology | Purpose |
|-------------------|---------|
| WordPress | Content Management System |
| Custom WordPress Theme | Built from a starter theme — no page builders used |
| XAMPP | Local development environment |
| AWS EC2 (Staging) | Staging server hosted on Amazon Web Services |
| AWS EC2 (Production) | Production server hosted on Amazon Web Services |
| Git + GitHub Classroom | Version control and team collaboration |
| Trello / GitHub Projects | Project management and task tracking |
| Slack / Discord | Team communication |
| PHP, HTML, CSS, JavaScript | Theme development languages |

## Project Management and Communication

The team used a public project management board throughout the project to 
plan, assign, and track tasks. Every team member was responsible for updating 
the board as they worked.

- *Project Board:* (paste your Trello or GitHub Projects URL here)  
- *Communication Channel:* (paste your Slack channel or Discord invite link here)

Markers and stakeholders can view the board to see how work was planned and 
distributed across the team.



## How to Get a Copy Running Locally

Follow these steps to get the project running on your own machine:

1. Clone this repository:
bash
   git clone https://github.com/cp3402-students/project-2026-jcua-team4-1.git


2. Install XAMPP and start Apache and MySQL.

3. Download a fresh copy of WordPress from wordpress.org and place it in your 
   XAMPP htdocs folder.

4. Copy the theme folder from this repository into: wp-content/themes/

5. 5. Create a local database using phpMyAdmin and complete the WordPress 
   installation by visiting http://localhost/wordpress in your browser.

6. In the WordPress admin dashboard, go to Appearance → Themes and activate 
   the custom theme.

7. Import the WordPress export file (provided in the submission) to restore 
   all content.

For full setup instructions, refer to [deployment.md](./deployment.md).



## Documentation Files

| File | Description |
|------|-------------|
| [deployment.md](./deployment.md) | Step-by-step guide for setting up local, staging, and production environments |
| [theme.md](./theme.md) | Guide for developers on the theme structure, files, and conventions |
| [site.md](./site.md) | Guide for the site maintainer on how to manage content in WordPress |



## Important Notes

- WordPress core files are *not* tracked in this repository. See .gitignore.
- No passwords, API keys, or secret credentials are stored anywhere in this 
  repository or on the project management board.
- All images and media used on the site are licensed for commercial use.
- The theme is built to be reusable — it contains no hard-coded content, 
  URLs, or site-specific IDs in the template files. 
