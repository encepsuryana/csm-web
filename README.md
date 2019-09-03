# Ciptasin-Web
Website CV. Cipta Sinergi Manufacturing

# Server Requirement
Before starting to install our item, make sure you fulfill the following requirements:
1. Required PHP version in server >= 7.0
2. mod_rewrite must be enabled in the server.

# Installation
1. Change on application > config > config.php 
		$config['base_url'] = 'url.com';
2. Change on application > config > database.php
		'hostname' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'csm_web',
		'dbdriver' => 'mysqli',