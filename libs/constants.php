<?php

// dont add a trailing / at the end
define('HTTP_SERVER', 'http://localhost');
// add slash / at the end
define('SITE_DIR', '/Railway Reservation/');

// database prefix if you use
define('DB_PREFIX', 'mp_');

define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_HOST_USERNAME', 'root');
define('DB_HOST_PASSWORD', '');
define('DB_DATABASE', 'simple-website');

define('SITE_NAME', 'Railway Reservation');

// define database tables
define('TABLE_PAGES', DB_PREFIX.'pages');
define('TABLE_TAGLINE', DB_PREFIX.'tagline');
?>


<?php
	# mysql db constants DB_HOST, DB_USER, DB_PASS, DB_NAME
	
	const DB_USER = 'root';
	const DB_PASS = '';
	const DB_NAME = 'simple-website';
?>