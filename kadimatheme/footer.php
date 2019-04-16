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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php wp_footer(); ?>
</body>
</html>
