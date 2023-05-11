<?php
/**
 * Plugin Name: FontStyles Plugin
 */

function my_custom_block_enqueue() {
    wp_enqueue_script(
        'my-custom-block',
        plugins_url( 'build/index.js', __FILE__ ),
        array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ),
        filemtime( plugin_dir_path( __FILE__ ) . 'build/index.js' ),
        true
    );
}
add_action( 'enqueue_block_editor_assets', 'my_custom_block_enqueue' );
