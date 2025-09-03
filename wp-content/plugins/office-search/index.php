<?php
/**
 * Plugin Name: My WooCommerce MVC (Office Search)
 */

if ( ! defined( 'ABSPATH' ) ) exit;
require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/controllers/OfficeController.php';
require_once __DIR__ . '/models/OfficeModel.php';

function officesearch_init() {
    $controller = new \Office\Controllers\OfficeController();
    $controller->register_hooks();
}
add_action('plugins_loaded', 'officesearch_init');
