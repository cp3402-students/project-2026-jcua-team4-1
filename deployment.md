# Development and Deployment 
The  purpose of this file is to explain  the  deployment and  development workflows that have been used to develop, test and deploy our theme  kc-blast-theme.

## Local Development 
Local  development was done using XAMPP and git used for version control.VS code was done using 

### Prerequisites
- XAMPP installed (Apache, MySQL, PHP)
- Git installed
- GitHub account
- VS Code 

### 1. Initialize Local Development Directory
Create project directory in XAMPP
```bash
# Create project directory in XAMPP
cd C:/xampp/htdocs
mkdir kc-tennis-blast
cd kc-tennis-blast
```

### 2. Install core wordpress files
Download wordpress from the official site 
Move wordpress files tp project directory


### 3. Configure Local Database
Start APache and MySQL in XAMPP
Navigate to:
```
http://localhost/phpmyadmin
```
Create a new database 

### 4. Run the wordpress installer 
Navigate to 
```
http://localhost/kc-tennis-blast
```
Enter database details and run the installer
Set up site title, username and password.
Click on open site to visit the site.
Navigate to 
```
http://localhost/kc-tennis-blast/wp-admin
```
to access the admin page 

### 4. Set up theme files  
Navigate to the theme folder 
```bash
cd  C:/xampp/htdocs/kc-blast-theme/wp-content/themes
```
Clone existing repossitory 
```bash
git clone https://github.com/cp3402-students/project-2026-jcua-team4-1.git kc-tennis-blast-theme
```
Head over to the Wordpress admin dashboard
Go to appearance > Themes 
Select kc-tennis-blast-theme and activate

### 5. Download required plugins 
Search and install contact forms 7 for contact forms 



