<?php get_header(); ?>
<?php
if(have_posts()){
while(have_posts()) {
the_post();
?>
<section class="theme--content wrapper">
    <header style="background-image: url(
        '<?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
            echo $thumb_url[0];
        ?>');"
    >
        <div class="container-fluid theme--content-title">
            <h2><?php the_title();?></h2>
        </div>
    </header>

    <div class="row col-md-12">

        <aside class="social">
            <?php get_sidebar(); ?><!-- Sidebar está vazia -->
        </aside>

        <section class="posts-container col-md-6">

                    <div class="post" style="display: block">

                        <div style="display: block">
                            <span>

                                <b>Por <?php the_author(); ?></b>,
                                <?php the_time('d') ?>/<?php the_time('F') ?>/<?php the_time('Y') ?>, às
                                <?php the_time() ?>
                            </span>
                            <p> <?php the_content();?></p>
                        </div>
                    </div>

        </section>

        <aside class="sidebar-right">
            <?php dynamic_sidebar( 'sidebar-1' )?>
        </aside>

        <div class="row col-md-12">
            <section class="posts-container col-md-6">

                <?php
                if(comments_open()):
                    comments_template();
                endif;
                ?>

            </section>

        </div>


    </div>

</section>

<?php
}
}
?>


<?php get_footer(); ?><!-- Falta as colunas dos widgets -->

