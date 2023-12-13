<?php
/**
 * Plugin Name:       Cherry Blocks
 * Description:       Cherry Blocks for custom WordPress blocks
 * Requires at least: 5.8
 * Requires PHP:      8.0
 * Version:           0.1.0
 * Author:            Marco Valeri
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       cherryblocks
 * 
 * @package cherryblocks
 */

if (!defined('ABSPATH')) {
    exit;
}

add_shortcode('cherryblocks', 'wp_cherry_block');
function wp_cherry_block()
{
    ob_start();
    ?>
    <div class="cherry-block">
        <h1>Cherry Block</h1>
    </div>
    <?php
    return ob_get_clean();
}

add_action('init', 'wp_cherry_block_init');
function wp_cherry_block_init()
{
    register_block_type(__DIR__ . '/build');
}