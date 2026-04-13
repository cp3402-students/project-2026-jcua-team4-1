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


##  Git workflow

### Branches 

**main** : Production-ready code 
**Staging**: Integration branch for changes and features

### Development workflow
1. Create a staging branch from main 
```bash
git checkout staging
git pull origin staging
```
2. Make changes locally in XAMPP
Test thoroughly at http://localhost/kc-tennis-blast

3. Commit changes with clear messages
```bash
git add .
git commit -m "Change header colour "
```

4. Push feature 
```bash
git push origin staging/your-feature-name

```
5. Test changes on the staging environment

6. Create Pull Request on GitHub
Describe changes
Request reviewers

7. After review and approval, merge to main
```bash
git checkout main
git pull origin main
git merge --no-ff staging
git push origin main
```

8. Review changes on the production site


## Github Actions CI/CD

### 1. Create GitHub Secrets

Navigate to: **Settings → Secrets and variables → Actions**

Required secrets:
```
PROD_HOST         # Your Lightsail instance IP
PROD_USER         # SSH username (usually 'ubuntu' or 'bitnami')
PROD_SSH_KEY     # Private SSH key for authentication
```

### 2. Add SSH Key to GitHub

1. Download private key from lightsail instance 

2. Copy private key content to GitHub Secrets

### 3. Create GitHub Actions Workflow

1. In your project directory;
    Create `.github/workflows/deploy.yml`:

2. Add your deployment workflow to automate deployment of your theme files to the production server.

3. Push changes to github

4. Verify deployment of theme files on your wordpress production site.

## Staging environment 

### 1. Initialise the lightsail instance 

1. Create a new lightsail instance.

2. Select platform:
    * Linux/Unix

3. Select a blueprint:   
    * Wordpress bitnami

4. Choose preffered instance size 

### 2. Delpoy staging  site content

1. Navigate to your local wordpress site 
2. Install All in one WP migrate as a plugin 
3. Export and download the file.
4. Log in into your staging  site instance 
5. Import downloaded wordpress file 
6. Review changes  
7. Merge changes to the main branch 


## Production environment.

### 1. Initialise the lightsail instance 

1. Create a new lightsail instance.

2. Select platform:
    * Linux/Unix

3. Select a blueprint:   
    * Wordpress bitnami

4. Choose preffered instance siz

### 2. Delpoy staging  site content

1. Navigate to your staging wordpress site 
2. Install All in one WP migrate as a plugin 
3. Export and download the file.
4. Log in into your production site instance 
5. Import downloaded wordpress file 
6. Review changes  


## Project management 

* Discord for team communication
* Trelllo for task managent
* Weekly in person meetings