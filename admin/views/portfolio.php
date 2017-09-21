<?php $projetos = getAll('portfolio'); ?>

<div class="container">
    <header class="main-header">
        <h2 class="main-title">Portfólio</h2>
    </header>

    <section class="main-section">

        <?php if ($projetos): ?>
            <h3 class="main-subtitle">  Lista de projetos </h3>
        <?php endif; ?>

        <div class="main-content">
            <?php if ($projetos): ?>
                <table class="table-portfolio">
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
                        <?php foreach ($projetos as $projeto): ?>
                            <tr>
                                <td> <?php echo $projeto->id; ?>  </td>
                                <td> <?php echo $projeto->titulo; ?>  </td>
                                <td> 
                                    <a href="//<?php echo $projeto->url; ?>" target="blank"> 
                                        Visualizar <i class="fa fa-external-link"></i> 
                                    </a>  
                                </td>
                                <td> <?php echo limitarTexto($projeto->descricao, 50, ''); ?>  </td>
                                <td> 
                                    <a href="<?php echo urlPagina('portfolio-editar'); ?>&id=<?php echo $projeto->id; ?>" class="edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="delete" data-id="<?php echo $projeto->id; ?>" data-titulo="<?php echo $projeto->titulo; ?> ">
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