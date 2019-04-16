<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php wp_head(); ?>
    </head>

    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
        <div>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#kadima-navbar"
                aria-controls="kadima-navbar"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse theme-nav',
                    'container_id' => 'kadima-navbar',
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker(),
                ));
            ?>
        </div>
    </nav>
