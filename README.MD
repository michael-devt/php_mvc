PHP MVC

#Helpfull links

Dev.to
https://dev.to/kabircse/oop-practice-with-a-standard-project-in-php-49h9

Laracast
https://laracasts.com/series/php-for-beginners/episodes/18


Others(Virtual host for centos)
vim /etc/httpd/conf.d/domain.conf
```
<VirtualHost *:80>
DocumentRoot /var/www/html/domain
RewriteEngine On
#RewriteRule ^/index\.php$ - [L,NC]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_URI} !/public
RewriteRule ^.+$ /index.php [L]
</VirtualHost>
```
