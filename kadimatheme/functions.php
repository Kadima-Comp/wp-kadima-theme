<?php
    require_once get_template_directory() . '/plugins/class-wp-bootstrap-navwalker.php';
    register_nav_menus(array('primary' => __('Primary Menu', 'kadimatheme')));

    function load_assets() {
        wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
        wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all');
        wp_enqueue_style('roboto-font', 'https://fonts.googleapis.com/css?family=Roboto', array(), '1.0', 'all');
        wp_enqueue_style('base', get_template_directory_uri() . '/css/base.css');
        wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'load_assets');
