<?php $usuarios = getAll('login'); ?>

<div class="container">
    <header class="main-header">
        <h2 class="main-title">Usuários</h2>
    </header>

    <section class="main-section">

        <?php if ($usuarios): ?>
            <h3 class="main-subtitle"> Lista de usuários </h3>
        <?php endif; ?>

        <div class="main-content">
            <?php if ($usuarios): ?>
                <table class="table-usuario">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Nome </th>
                            <th> Email </th>
                            <th> Usuário </th>
                            <th> Ações </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $usuario): ?>
                            <tr>
                                <td> <?php echo $usuario->id; ?>  </td>
                                <td> <?php echo $usuario->nome; ?>  </td>
                                <td> <?php echo $usuario->email ?> </td>
                                <td> <?php echo $usuario->usuario; ?>  </td>
                                <td> 
                                    <a href="<?php echo urlPagina('usuario-editar') ?>&id=<?php echo $usuario->id; ?>" class="edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="delete" data-id="<?php echo $usuario->id; ?>" data-nome="<?php echo $usuario->nome; ?>">
                                        <i class="fa fa-close"></i>
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