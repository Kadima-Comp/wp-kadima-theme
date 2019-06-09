<?php
    require_once get_template_directory() . '/plugins/class-wp-bootstrap-navwalker.php';

    register_nav_menus(array('primary' => __('Primary Menu', 'kadimatheme')));

    function load_assets() {
        wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
        wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all');
        wp_enqueue_style('Fontawesome-icons', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), '4.3.2', 'all');
        wp_enqueue_style('roboto-font', 'https://fonts.googleapis.com/css?family=Roboto', array(), '1.0', 'all');
        wp_enqueue_style('base', get_template_directory_uri() . '/css/base.css');
        wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), '1.1', 'all');
        wp_enqueue_style('comments', get_template_directory_uri() . '/css/comments.css');
    }

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5' , array('comment-list', 'comment-form'));

    add_action('wp_enqueue_scripts', 'load_assets');

    add_action('widgets_init', 'wp_sidebars');

    function wp_sidebars(){
        register_sidebar(
            array(
                'name' => 'Sidebar Direita',
                'id' => 'sidebar-1',
                'description' => 'Adicione elementos a sua barra lateral direita da página',
                'before_widget' => '<div class="widget-area>"',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );
        register_sidebar(
            array(
                'name' => 'Footer',
                'id' => 'footer-1',
                'description' => 'Adicione elementos ao rodapé da página',
                'before_widget' => '<div class="col-md-3 mx-auto">',
                'after_widget' => '</div>',
                'before_title' => '<h5 class="text-uppercase titulo-footer">',
                'after_title' => '</h5>'
            )
        );
        register_sidebar(
            array(
                'name' => 'Sidebar Esquerda',
                'id' => 'sidebar-2',
                'description' => 'Adicione elementos a sua barra lateral esquerda da página. Para um
                melhor aproveitamento da página recomendamos utilizar somente pequenas figuras.',
                'before_widget' => '<li>',
                'after_widget' => '</li>',
                'before_title' => '<h5 style="display: none">',
                'after_title' => '</h5>'
            )
        );
    }
