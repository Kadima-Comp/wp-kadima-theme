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


<?php get_sidebar(); ?><!-- Sidebar está vazia -->
<?php get_footer(); ?><!-- Falta as colunas dos widgets -->
