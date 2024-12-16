<?php
define('DB_NAME', getenv('WORDPRESS_DB_NAME'));
define('DB_USER', getenv('WORDPRESS_DB_USER'));
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));
define('DB_HOST', getenv('WORDPRESS_DB_HOST'));
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// Redis Cache Config
define('WP_CACHE', true);
define('WP_REDIS_HOST', getenv('WORDPRESS_REDIS_HOST') ?: 'redis');
define('WP_REDIS_PORT', getenv('WORDPRESS_REDIS_PORT') ?: 6379);

// Chave de Segurança
define('AUTH_KEY', 'your-auth-key');
define('SECURE_AUTH_KEY', 'your-secure-auth-key');
define('LOGGED_IN_KEY', 'your-logged-in-key');
define('NONCE_KEY', 'your-nonce-key');
define('AUTH_SALT', 'your-auth-salt');
define('SECURE_AUTH_SALT', 'your-secure-auth-salt');
define('LOGGED_IN_SALT', 'your-logged-in-salt');
define('NONCE_SALT', 'your-nonce-salt');

$table_prefix = 'wp_';
define('WP_DEBUG', false);

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once ABSPATH . 'wp-settings.php';
