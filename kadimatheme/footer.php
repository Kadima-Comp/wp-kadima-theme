<footer class="page-footer">
    <div class="glass">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="container col-10 col-lg-8 col-xl-6">
                    <h3 class="titulo-footer text-center">
                        Se cadastre e fique por dentro das novidades!
                    </h3>
                    <div class="input-group mb-3">
                        <input
                            type="text"
                            class="capture-email-field form-control"
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
        </div>

        <div class="container text-left">
            <div class="row">
                <?php dynamic_sidebar( 'footer-1' )?>
            </div>
        </div>

        <div class="footer-copyright text-center">
            <span>&copy; 2019 <?php bloginfo($show = 'name'); ?> - Todos os direitos reservados.</span>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
