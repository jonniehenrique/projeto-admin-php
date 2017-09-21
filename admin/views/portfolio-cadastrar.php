<?php $categorias = getAll('categorias'); ?>

<div class="container">
    <header class="main-header">
        <h2 class="main-title">Portfólio</h2>
    </header>

    <section class="main-section">
        <h3 class="main-subtitle"> Novo projeto </h3>

        <div class="main-content">
            <form id="form-portfolio" method="post" enctype="multipart/form-data">
                <input type="text" name="titulo" placeholder="Nome do projeto" autocomplete="off" autofocus required>
                <input type="text" name="url" placeholder="Url do projeto" autocomplete="off" required>
                <select name="id_categoria">
                    <option value="#">Tipo do projeto</option>
                    <?php foreach($categorias as $categoria): ?>
                        <option value="<?php echo $categoria->id; ?>"> <?php echo $categoria->nome; ?> </option>
                    <?php endforeach; ?>
                </select>
                <textarea name="descricao" placeholder="Descrição do projeto" autocomplete="off" required></textarea>

                <div class="form-footer">
                    <button type="submit" name="portfolioCadastrar" class="btn btn-primary btn-cadastrar">
                        Salvar <i class="fa fa-check"></i>
                    </button>
                </div>
            </form>
        </div>

    </section>
</div>