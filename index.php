<?php include_once 'template/header.php'; ?>
<?php $projetos = getAll('portfolio'); ?>
<?php $categorias = getAll('categorias'); ?>

<section class="main">
    <div class="container">
        <header>
            <h2 class="title"> 
                <span>Desenvolvedor Front-end</span>, descontraído, que ama o que faz.
                Trabalha em equipe, ou equipado, com <span>muito café</span>, música e 
                <span>muito código</span>!
            </h2>
        </header>

        <nav class="nav-categorias">
            <a href="#" class="categoria-item active" data-id="all"> TODOS </a>
            <?php foreach($categorias as $categoria): ?>
                <a href="#" class="categoria-item" data-id="<?php echo $categoria->id; ?>"> <?php echo $categoria->nome; ?> </a>
            <?php endforeach; ?>
        </nav>

        <div class="portfolio">
            <?php foreach($projetos as $projeto): ?>
                <article class="portfolio-item portfolio-<?php echo $projeto->id_categoria; ?>">
                    <?php if ($projeto->titulo != 'Resolve Engenharia'): ?>
                        <b class="evomaster"> 
                            direitos reservados a <a href="//evomaster.com.br" class="evomaster-link" target="blank"> Evomaster <i class="fa fa-external-link"></i> </a> 
                        </b>
                    <?php endif; ?>
                    <span class="image">
                        <img src="<?php echo urlBase(); ?>/assets/images/5.jpg" alt="<?php echo $projeto->titulo; ?>">
                    </span>
                    <span class="content-link">
                        <h2> <?php echo $projeto->titulo; ?> </h2>
                        <div class="content">
                            <p>
                                <?php echo $projeto->descricao; ?>
                            </p>
                        </div>
                    </span>
                </article>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<?php include_once 'template/footer.php'; ?>