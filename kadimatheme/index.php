<?php get_header(); ?>

<section class="theme--home">
    <header id="header-header" class="header">
        <div class="container-fluid">
            <h1><?php bloginfo($show = 'name'); ?></h1>
            <h2><?php bloginfo($show = 'description'); ?></h2>
        </div>
    </header>

    <div class="card w-75 input-email elevation">
        <div>
            <h3>Se cadastre e fique por dentro das novidades!</h3>
            <div class="input-group mb-3">
                <input
                    type="text"
                    class="form-control capture-email-field"
                    placeholder="E-mail"
                    aria-label="E-mail do usuario"
                    aria-describedby="basic-addon2"
                >
                <div class="input-group-append">
                    <button
                        class="capture-email-button btn btn-secondary"
                        type="submit"
                    >
                        Enviar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row col-md-12">
        
        
        <?php get_sidebar(); ?><!-- redes sociais -->

        <section class="posts-container col-md-7">
            <?php
                if(have_posts()){
                    while(have_posts()) {
                        the_post();
                    ?>
                    <div class="post">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php
                                $thumb_id = get_post_thumbnail_id();
                                $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                                echo $thumb_url[0];
                                ?>" alt="post-thumb"
                            >
                        </a>

                        <div class="titles">
                            <a class="post-title" href="<?php the_permalink(); ?>"><?php the_title();?></a>
                            <span>
                                <b><?php the_author(); ?></b>,
                                <?php the_time('d') ?>/<?php the_time('F') ?>/<?php the_time('Y') ?>, às
                                <?php the_time() ?>
                            </span>
                            <p> 
                                <?php the_excerpt() ?>
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">Continue lendo </a>
                            </p>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </section>

        <aside class="sidebar-right col-md-3 h-100">
            <?php dynamic_sidebar( 'sidebar-1' )?>
        </aside>

    </div>
</div>

    <!-- <?php get_search_form(); ?>Referente ao card de Widget de Pesquisa -->

</section>

<?php get_footer(); ?><!-- Falta as colunas dos widgets -->
