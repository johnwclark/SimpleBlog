# SimpleBlog
a simple php and laravel based blog

-----
I have done this on a WSL running Ubuntu
----------packages needed to setup-------
sudo apt install apache2
sudo apt install mysql-client-core-5.7
sudo apt install mysql-server
sudo apt install php7.2
sudo apt install php libapache2-mod-php php-common php-mbstring php-xmlrpc php-soap php-gd php-xml php-mysql php-cli php-zip
sudo apt install composer
composer global require laravel/installer
#add laravel to path in bash_profile 
export PATH="$HOME/.composer/vendor/bin:$PATH"

----------------
# Add the DB and user to match the project .env file
sudo mysql -u root -p
CREATE DATABASE IF NOT EXISTS simpleblog ;
GRANT ALL PRIVILEGES ON simpleblog.* TO 'simpleblog'@'localhost' IDENTIFIED BY 'blogpasswd';
# from the SimpleBlog directory run the migrations
php artisan migrate

------ start mysql and httpd --------------
# go into my project directory and launch vscode
cd /mnt/d/source/SimpleBlog
code
#sudo service apache2 start
# I opted to use the php web server for testing
sudo service mysql start
php artisan server


--- my own notes ---
# sub tablename in for Post ( connected to Posts table )

# to have laravel setup tables / models / migrations 
php artisan make:model Post --migration 

# to have laravel setup a CRUd controller
php artisan make:controller PostController --resource
