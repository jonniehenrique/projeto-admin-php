<?php $projeto = getByID('portfolio', $_GET['id']); ?>

<div class="container">
    <header class="main-header">
        <h2 class="main-title">Portfólio</h2>
    </header>

    <section class="main-section">
        <h3 class="main-subtitle"> Projeto #<?php echo $projeto->id; ?> </h3>

        <div class="main-content">
            <form action="#" id="form-portfolio-edit" method="post">
                <input type="text" name="titulo" placeholder="Nome do projeto" value="<?php echo $projeto->titulo; ?>" required>
                <input type="text" name="url" placeholder="Url do projeto" value="<?php echo $projeto->url; ?>">
                <textarea name="descricao" placeholder="Descrição do projeto"><?php echo $projeto->descricao ?></textarea>
                <input type="hidden" name="id" value="<?php echo $projeto->id; ?>">

                <div class="form-footer">
                    <button type="submit" name="portfolioCadastrar" class="btn btn-primary btn-cadastrar">
                        Atualizar <i class="fa fa-check"></i>
                    </button>
                </div>
            </form>

            <div class="portfolio-item-image">
                <img src="<?php echo urlBase() . 'upload/portfolio/' . $projeto['imagem']; ?>" alt="">
            </div>
        </div>

    </section>
</div>