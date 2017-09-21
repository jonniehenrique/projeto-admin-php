<?php $post = getByID('tb_postagens', $_GET['id']); ?>

<div class="container">
    <header class="main-header">
        <h2 class="main-title">Portfólio</h2>
    </header>

    <section class="main-section">
        <h3 class="main-subtitle"> Projeto #<?php echo $post->id; ?> </h3>

        <div class="main-content">
            <form action="#" id="form-portfolio-edit" method="post">
                <input type="text" name="titulo" placeholder="Nome do projeto" value="<?php echo $post->titulo; ?>" required>
                <input type="text" name="url" placeholder="Url do projeto" value="<?php echo $post->url; ?>">
                <textarea name="descricao" placeholder="Descrição do projeto"><?php echo $post->descricao ?></textarea>
                <input type="hidden" name="id" value="<?php echo $post->id; ?>">

                <div class="form-footer">
                    <button type="submit" name="portfolioCadastrar" class="btn btn-primary btn-cadastrar">
                        Atualizar <i class="fa fa-check"></i>
                    </button>
                </div>
            </form>

            <div class="portfolio-item-image">
                <img src="<?php echo urlBase() . 'upload/portfolio/' . $post['imagem']; ?>" alt="">
            </div>
        </div>

    </section>
</div>