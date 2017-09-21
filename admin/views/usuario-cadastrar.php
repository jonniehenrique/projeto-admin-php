<div class="container">
    <header class="main-header">
        <h2 class="main-title">Usuários</h2>
    </header>

    <section class="main-section">
        <h3 class="main-subtitle"> Novo usuário </h3>

        <div class="main-content">
            <form action="#" id="form-usuario" method="post" enctype="multipart/form-data">
                <input type="text" name="nome" placeholder="Nome" autocomplete="off" required>
                <input type="email" name="email" placeholder="Email" autocomplete="off" required>

                <input type="text" name="usuario" placeholder="Usuário de acesso" autocomplete="off" required>
                <input type="password" name="senha" placeholder="Senha de acesso" autocomplete="off" required>

                <select name="nivel">
                    <option value="">Selecione o nível de acesso</option>
                    <option value="0">Usuário</option>
                    <option value="1">Administrador </option>
                </select>

                <div class="form-footer">
                    <button type="submit" name="usuarioCadastrar" class="btn btn-primary btn-cadastrar">
                        Salvar <i class="fa fa-check"></i>
                    </button>
                </div>
            </form>
        </div>

    </section>
</div>