<?php
/**
 * Shared bootstrap file
 */

// Define path constants
define('KIRBY_BASE_PATH', __DIR__);
define('KIRBY_VENDOR_PATH', KIRBY_BASE_PATH . '/vendor');

// Load Composer's autoloader
require_once KIRBY_VENDOR_PATH . '/autoload.php';

// Load dotenv?
if (class_exists(Dotenv\Dotenv::class)) {
    // By default, this will allow .env file values to override environment variables
    // with matching names. Use `createUnsafeImmutable` to disable this.
    Dotenv\Dotenv::createUnsafeMutable(KIRBY_BASE_PATH)->safeLoad();
}
