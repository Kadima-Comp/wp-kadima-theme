<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <p>
        <?php echo get_template_part('content', get_post_format()); ?>
    </p>
<?php endwhile; ?>
