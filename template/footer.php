<footer id="footer">
    <div class="container">
        
        <section class="contact">
            <h2 class="title"> Contate-me </h2>

            <form action="#">
                <div class="form-group">
                    <input type="text" placeholder="Nome" name="nome" required>
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                    <textarea name="mensagem" placeholder="Mensagem" required></textarea>
                </div>
                <button type="submit" class="btn btn-submit"> Enviar </button>
            </form>
        </section>

        <section class="social">
            <h2 class="title"> Siga-me </h2>

            <nav class="social-nav">
                <a href="#" class="social-item"><i class="fa fa-instagram"></i></a>
                <a href="#" class="social-item"><i class="fa fa-facebook"></i></a>
                <a href="#" class="social-item"><i class="fa fa-whatsapp"></i></a>
                <a href="#" class="social-item"><i class="fa fa-github"></i></a>
                <a href="#" class="social-item"><i class="fa fa-codepen"></i></a>
                <a href="#" class="social-item"><i class="fa fa-envelope-o"></i></a>
            </nav>
        </section>

    </div>

    <div class="container">
        <div class="developed">
            <p> <i class="fa fa-copyright"></i> Todos os direitos reservados  </p>
            <p> Desenvolvido pelo próprio <a href="#"> Jonnie Henrique </a> </p>
        </div>
    </div>
</footer>

<script src="<?php echo urlBase(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo urlBase(); ?>/assets/js/app.js"></script>

</body>
</html>