<?php get_header(); ?>

<article>
    <h2><?php the_title(); ?></h2>

    <p>Por <?php the_autor_posts_link(); ?>, <?php echo get_the_date(); ?></p>
    <p>Categorias: <?php the_category(' '); ?></p>

    <?php the_content(); ?>
</article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
