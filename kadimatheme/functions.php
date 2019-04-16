<?php
    require_once get_template_directory() . '/plugins/class-wp-bootstrap-navwalker.php';
    register_nav_menus(array('primary' => __('Primary Menu', 'kadimatheme')));

    function load_assets() {
        wp_enqueue_style('template', get_template_directory_uri() . '/css/base.css', array(), '1.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'load_assets');
