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
 */

 function create_block_cherryblocks_block_init() {
    register_block_type(__DIR__ . '/build');
 }
 add_action('init', 'create_block_cherryblocks_block_init');