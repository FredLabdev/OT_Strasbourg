<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db756127562' );

/** MySQL database username */
define( 'DB_USER', 'dbo756127562' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Fred&200172' );

/** MySQL hostname */
define( 'DB_HOST', 'db756127562.db.1and1.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's4WCgWRXDoIf6lj27BRlm2Z5+zHOoDnJwYz0m/NbKbCHox5ZCQ2BMnn7oF8f+mD32O/KuN5uIyLkdO+QJO/sMA==');
define('SECURE_AUTH_KEY',  'S+MWnRpwKJtOfwJ5gXYH3LLkH9mMHY24yqWwln82HnHEoYKiPWPE76z+Zo9DySDthCV2rC23DFHM5mqbXnDE8g==');
define('LOGGED_IN_KEY',    '/joL0K+j+7y+mgbgtsob8R/bO8UFo4ATR9Y5UmfbJJQtkP479RRp/mp78c6lUdk4Y7o/FxCbD/Rtsd3uBIv1/w==');
define('NONCE_KEY',        'hIv7rUN7cQE44RC2aEIpyMRIo46SCX598sia9gauKOPGQbJKHQ/Vmj1kOTjL65SUo+0dr2b8xWLn8vfY1gNwvw==');
define('AUTH_SALT',        'mrvjgT0n2xTx6wt9mlayUthopt74SVkhDgje23A9/71wJSfweP5Kq6di7f9pk8RuB+U52lnOnoERxFhsBACy4w==');
define('SECURE_AUTH_SALT', 'wDJ+LrESPNYlvUD0eEBHS9FAUKVF04sb+8VCzCG6mPaNPyWCW9K44+4XA4fx+cxB5AX+pOpIiaBXCtgJKuRXng==');
define('LOGGED_IN_SALT',   'D/VCkYe7ICf9Xxf//kiU91GA370RQF3x/OSXPE+IBr8y5o+7i8q3cX7oMqDiiRCPyZwVkvcyyPALc01kzhyHZw==');
define('NONCE_SALT',       '3RkJ6wUzcuayQApmLsRqaUeJ51xVL7G2OGvtK4lRIENApfvNx7RHc4XjJhQ5ajYKinSfA4N8BOTCSWaeibOUBw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
