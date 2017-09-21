
<?php $usuario = getByID('login', $_GET['id']); ?>

<div class="container">
    <header class="main-header">
        <h2 class="main-title">Usuários</h2>
    </header>

    <section class="main-section">
        <h3 class="main-subtitle"> Editar usuário #<?php echo $usuario->id; ?></h3>

        <div class="main-content">
            <form action="#" id="form-usuario-edit" method="post" enctype="multipart/form-data">
                <input type="text" name="nome" placeholder="Nome" autocomplete="off" value="<?php echo $usuario->nome; ?>" required>
                <input type="email" name="email" placeholder="Email" autocomplete="off" value="<?php echo $usuario->email; ?>" required>

                <input type="text" name="usuario" placeholder="Usuário de acesso" autocomplete="off"  value="<?php echo $usuario->usuario; ?>" required>
                <input type="password" name="senha" placeholder="Senha de acesso" autocomplete="off" disabled>

                <select name="nivel">
                    <option value="">Selecione o nível de acesso</option>
                    <option value="0" <?php if ($usuario->nivel == 0): echo 'selected'; endif; ?>>Usuário</option>
                    <option value="1" <?php if ($usuario->nivel == 1): echo 'selected'; endif; ?>>Administrador </option>
                </select>

                <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">

                <div class="form-footer">
                    <button type="submit" name="usuarioEditar" class="btn btn-primary btn-cadastrar">
                        Salvar <i class="fa fa-check"></i>
                    </button>
                </div>
            </form>
        </div>

    </section>
</div>