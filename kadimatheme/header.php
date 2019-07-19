<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        
        <meta name="viewport" content="width=device-width" />
        
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php wp_head(); ?>
    </head>

    <script>
        function animeScroll(){
            console.log($(window).scrollTop());
            
            //var mediaini =  ($('section').offset().top)*2;
            //console.log("Media Inicial: ", mediaini);

            var mediafim = ($('section').innerHeight() - (($('aside#social').innerHeight()*3)/5.2));
            //console.log("Media Final: ", mediafim);

            //if (130 <= $(window).scrollTop() && $(window).scrollTop() <= 800) {
            if (250 < $(window).scrollTop() && $(window).scrollTop() < mediafim) {
                //alert('Iniciou');
                document.getElementById('social').style.opacity="1";
                document.getElementById('social').style.transition=".2s";
                document.getElementById('social').style.visibility="visible";
            } else {
                document.getElementById('social').style.opacity="0";
                document.getElementById('social').style.visibility="hidden";
            }
        };
        window.addEventListener('scroll', function(){
            animeScroll();
        })
    </script>

    <nav class="navbar navbar-expand-md navbar-light nav-theme" role="navigation">
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
            <!-- Botão de Pesquisa de conteúdo 
            <div class="search">
                <?php get_search_form(); ?>
                <button class="searchQ" type="submit"> <p>Q</p> </button>
            </div>
            -->
        </div>
    </nav>


