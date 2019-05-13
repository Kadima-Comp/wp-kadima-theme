<?php while (have_posts()) : the_post(); ?>
    
    <?php echo get_template_part('content', get_post_format()); ?><!-- A busca acontece, mas as postagens em si não aparecem -->

<?php endwhile; ?><!-- Precisa arrumar a escolha para 404 -->
    <?php get_404(); ?><!-- 404 já está sendo puxada, só falta ajeita a página em si -->
