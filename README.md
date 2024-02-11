# MVC_Starter
 Instantly create an MVC PHP Project

VHOST CONFIGURE FILE LOCATION: YOUR_XAMPP_LOCATION/apache/conf/extra/httpd-vhosts.conf
```
<VirtualHost *:80>
DocumentRoot "C:/xampp/htdocs"
ServerName localhost
</VirtualHost>

Listen 4001    
NameVirtualHost *:4001
<VirtualHost *:80 *:4001>
    DocumentRoot "PROJECTLOCATION/public"
    ServerName mvc.localhost
    <Directory "PROJECTLOCATION/public">
        Options Indexes FollowSymLinks ExecCGI Includes

	RewriteEngine on
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteRule ^(.*)$ index.php [NC,L,QSA]

        # AllowOverride controls what directives may be placed in .htaccess files.
        # It can be "All", "None", or any combination of the keywords:
        #   Options FileInfo AuthConfig Limit
        #
        #AllowOverride None
        # since XAMPP 1.4:
        AllowOverride All

        # Controls who can get stuff from this server.
        Require all granted
    </Directory>
</VirtualHost>
```
change "PROJECTLOCATION/public" to the location where your MVC project is. Keep /public after it, as that is where index.php is located.
change "mvc" in mvc.localhost to whatever your project is called