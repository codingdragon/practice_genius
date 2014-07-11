practice_genius
===============


Laravel Demo Challenge


Setup Virtual to laravel.demo
<VirtualHost 127.0.0.1>
    DocumentRoot "C:\wamp\www\laravel-demo-master\public"
    ServerName laravel.demo
</VirtualHost>
  
<Directory "C:\wamp\www\laravel-demo-master\public">	
	Options Indexes FollowSymLinks MultiViews
    AllowOverride All
    Order allow,deny
    Allow from all
</Directory>

Add/Update hosts file on windows
127.0.0.1	laravel.demo

Restart Apache/Nginx Server
Launch browser to http://laravel.demo

Select the id number to view contents.

Will Display 3 tables for the selected ID#

1. Category & Weight
2. Scheduled Posted Content
3. Posted Content
