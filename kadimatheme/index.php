<?php get_header(); ?>

<section class="theme--home">
    <header class="header">
        <div class="container-fluid">
            <h1><?php bloginfo($show = 'name'); ?></h1>
            <h2><?php bloginfo($show = 'description'); ?></h2>
        </div>
    </header>

    <div class="card w-75 input-email elevation">
        <div class="card-body">
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

    <?php get_search_form(); ?><!-- Referente ao card de Widget de Pesquisa -->

</section>

<!-- Loop de Posts para Página de importação -->
<div class="col-md-8">
    <?php
    if(have_posts()):
        while(have_posts()): the_post();
    ?>
    
    <article>
        <p>Categorias: <?php the_category(' '); ?></p>
        <h2><?php the_title(); ?></h2>
        <p>Por <?php the_autor_posts_link(); ?>, <?php echo get_the_date(); ?></p>
        <?php the_content(); ?>
    </article>

    <?php 
        endwhile; 
    else: 
    ?>
        <p>Não há posts disponíveis.</p>
    <?php endif; ?>
</div>


<?php //get_sidebar(); ?><!-- Sidebar está vazia -->
<?php get_footer(); ?><!-- Falta as colunas dos widgets -->
