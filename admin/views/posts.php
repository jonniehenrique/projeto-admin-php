<?php $posts = getAll('tb_postagens'); ?>

<div class="container">
    <header class="main-header">
        <h2 class="main-title">Blog</h2>
    </header>

    <section class="main-section">

        <?php if ($posts): ?>
            <h3 class="main-subtitle">  Lista de posts </h3>
        <?php endif; ?>

        <div class="main-content">
            <?php if ($posts): ?>
                <table class="table-blog">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Titulo </th>
                            <th> Url </th>
                            <th> Descrição </th>
                            <th> Ações </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $post): ?>
                            <tr>
                                <td> <?php echo $post->id; ?>  </td>
                                <td> <?php echo $post->titulo; ?>  </td>
                                <td> 
                                    <a href="//<?php echo $post->url; ?>" target="blank"> 
                                        Visualizar <i class="fa fa-external-link"></i> 
                                    </a>  
                                </td>
                                <td> <?php echo limitarTexto(strip_tags($post->descricao), 50, ''); ?>  </td>
                                <td> 
                                    <a href="<?php echo urlPagina('post-editar'); ?>&id=<?php echo $post->id; ?>" class="edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="delete" data-id="<?php echo $post->id; ?>" data-titulo="<?php echo $post->titulo; ?> ">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <?php include_once 'sem-registros.php'; ?>
            <?php endif; ?>
        </div>
    </section>
</div>