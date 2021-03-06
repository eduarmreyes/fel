<?php
if ($_SERVER['SERVER_NAME'] === "localhost") {
	// HTTP
	define('HTTP_SERVER', 'http://localhost/fel/');

	// HTTPS
	define('HTTPS_SERVER', 'http://localhost/fel/');

	// DIR
	define('DIR_APPLICATION', '/var/www/html/fel/catalog/');
	define('DIR_SYSTEM', '/var/www/html/fel/system/');
	define('DIR_LANGUAGE', '/var/www/html/fel/catalog/language/');
	define('DIR_TEMPLATE', '/var/www/html/fel/catalog/view/theme/');
	define('DIR_CONFIG', '/var/www/html/fel/system/config/');
	define('DIR_IMAGE', '/var/www/html/fel/image/');
	define('DIR_CACHE', '/var/www/html/fel/system/storage/cache/');
	define('DIR_DOWNLOAD', '/var/www/html/fel/system/storage/download/');
	define('DIR_LOGS', '/var/www/html/fel/system/storage/logs/');
	define('DIR_MODIFICATION', '/var/www/html/fel/system/storage/modification/');
	define('DIR_UPLOAD', '/var/www/html/fel/system/storage/upload/');

	// DB
	define('DB_DRIVER', 'mysqli');
	define('DB_HOSTNAME', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_DATABASE', 'db_efl');
	define('DB_PORT', '3306');
	define('DB_PREFIX', 'fel_');
} else {
	// HTTP
	define('HTTP_SERVER', 'http://' . $_SERVER['SERVER_NAME'].'/');

	// HTTPS
	define('HTTPS_SERVER', 'http://' . $_SERVER['SERVER_NAME'].'/');

	// DIR
	define('DIR_APPLICATION', '/app/catalog/');
	define('DIR_SYSTEM', '/app/system/');
	define('DIR_LANGUAGE', '/app/catalog/language/');
	define('DIR_TEMPLATE', '/app/catalog/view/theme/');
	define('DIR_CONFIG', '/app/system/config/');
	define('DIR_IMAGE', '/app/image/');
	define('DIR_CACHE', '/app/system/storage/cache/');
	define('DIR_DOWNLOAD', '/app/system/storage/download/');
	define('DIR_LOGS', '/app/system/storage/logs/');
	define('DIR_MODIFICATION', '/app/system/storage/modification/');
	define('DIR_UPLOAD', '/app/system/storage/upload/');

	// DB
	$db = parse_url($_ENV["CLEARDB_DATABASE_URL"]);
	define('DB_DRIVER', 'mysqli');
	define('DB_HOSTNAME', $db["host"]);
	define('DB_USERNAME', $db["user"]);
	define('DB_PASSWORD', $db["pass"]);
	define('DB_DATABASE', trim($db["path"],"/"));
	define('DB_PORT', '3306');
	define('DB_PREFIX', 'fel_');
}