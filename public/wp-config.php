<?php
/** WordPress's config file **/
/** http://wordpress.org/   **/

// ** MySQL settings ** //
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'yotham_yotham');     // The name of the database
define('DB_USER', 'yotham_yotham');     // Your MySQL username
define('DB_PASSWORD', 'thibamay'); // ...and password
define('DB_HOST', 'localhost');     // ...and the server MySQL is running on

// define('WP_HOME','http://merrycreation.com/~yotham');
// define('WP_SITEURL','http://merrycreation.com/~yotham');

// Change the prefix if you want to have multiple blogs in a single database.

$table_prefix  = 'wp_m224mx_';   // example: 'wp_' or 'b2' or 'mylogin_'

// Change this to localize WordPress.  A corresponding MO file for the
// chosen language must be installed to wp-includes/languages.
// For example, install de.mo to wp-includes/languages and set WPLANG to 'de'
// to enable German language support.
define ('WPLANG', 'fr_FR');

/* Stop editing */

$server = DB_HOST;
$loginsql = DB_USER;
$passsql = DB_PASSWORD;
$base = DB_NAME;

define('ABSPATH', dirname(__FILE__).'/');

// Get everything else
require_once(ABSPATH.'wp-settings.php');
?>