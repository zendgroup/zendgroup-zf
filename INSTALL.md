1 - Create 2 domain at system32/driver/etc/hosts or /etc/hosts
     homeserver.local and assets.homeserver.local

2 - Create 2 virtual host

	<VirtualHost *:80>
		ServerAdmin admin@thuydx.com
		DocumentRoot "D:\zendgroup\public"
		ServerName homeserver.local
		ServerAlias www.homeserver.local
		<Directory "D:\zendgroup\public">
			Options Indexes FollowSymLinks
			AllowOverride All
			Order allow,deny
			Allow from all
		</Directory>    
	</VirtualHost>
	<VirtualHost *:80>
		ServerAdmin admin@thuydx.com
		DocumentRoot "D:\zendgroup\assets"
		ServerName assets.homeserver.local
		ServerAlias assets.homeserver.local
		<Directory "D:\zendgroup\assets">
			Options Indexes FollowSymLinks
			AllowOverride All
			Order allow,deny
			Allow from all
		</Directory>    
	</VirtualHost>

	NOTE: if you change domain you must be change config at vendors/Autoload/definition.php (ASSETS_LINK)
	change

3 - Config ZF2 Library and Doctrine2 Libray at public/.htaccess
	Please add 2 libraries about to include_path in php.ini file.

	If you can't edit php.ini you can go to vendors/Autoload/autoload_namespace file and uncomment from line 7 to line 12
	to include ZF2 and Doctrine2. 
	Make sure you got 2 libraries in vendors/ZF2 (full path: vendors/ZF2/Zend)
	and in vendors/Doctrine2 (fullpath: vendors/Doctrine2/Doctrine)
