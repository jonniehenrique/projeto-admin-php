<?php $empresa = getByID('configuracoes', 1); ?>

<div class="container">
    <header class="main-header">
        <h2 class="main-title">Configurações</h2>

        <nav class="main-nav">
            <a href="#" class="nav-section active" data-section="empresa"> Empresa  </a>
            <a href="#" class="nav-section" data-section="contato"> Contato  </a>
            <a href="#" class="nav-section" data-section="localizacao"> Localização  </a>
        </nav>
    </header>

    <section class="main-section active" id="section-empresa" hidden>
        <h3 class="main-subtitle"> Dados da empresa </h3>

        <div class="main-content">
            <form action="#" id="form-configuracoes" method="post" enctype="multipart/form-data">
                <input type="text" name="nome" placeholder="Nome" value="<?php echo $empresa->nome; ?>" required>
                <input type="text" name="alias" placeholder="Alias" value="<?php echo $empresa->alias; ?>" required>
                <input type="text" name="contato" placeholder="Contato" value="<?php echo mascarar($empresa->contato, '(##) #####-####'); ?>" required>
                <input type="text" name="identificacao" placeholder="CPF / CNPJ" value="<?php echo mascarar($empresa->identificacao, '###.###.###-##'); ?>" required>

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-cadastrar">
                        Salvar <i class="fa fa-check"></i>
                    </button>
                </div>
            </form>
        </div>

    </section>

    <?php $contato = getByID('contato', 1); ?>

    <section class="main-section"  id="section-contato" hidden>
        <h3 class="main-subtitle"> Dados de contato </h3>

        <div class="main-content">
            <form action="#" id="form-config-contato" method="post" enctype="multipart/form-data">
                <input type="text" name="facebook" placeholder="Facebook" value="<?php echo $contato->facebook; ?>">
                <input type="text" name="twitter" placeholder="Twitter" value="<?php echo $contato->twitter; ?>">
                <input type="text" name="instagram" placeholder="Instagram" value="<?php echo $contato->instagram; ?>">
                <input type="text" name="whatsapp" placeholder="Whatsapp" value="<?php echo $contato->whatsapp; ?>">

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-cadastrar">
                        Salvar <i class="fa fa-check"></i>
                    </button>
                </div>
            </form>
        </div>

    </section>

    <?php $endereco = getByID('endereco', 1); ?>

    <section class="main-section"  id="section-localizacao" hidden>
        <h3 class="main-subtitle"> Dados de localização </h3>

        <div class="main-content">
            <form action="#" id="form-config-localizacao" method="post" enctype="multipart/form-data">
                <input type="text" name="cep" placeholder="Cep" value="<?php echo mascarar($endereco->cep, '#####-###'); ?>">
                <input type="text" name="rua" placeholder="Rua" value="<?php echo $endereco->rua; ?>">
                <input type="text" name="numero" placeholder="Número" value="<?php echo $endereco->numero; ?>">
                <input type="text" name="complemento" placeholder="Complemento" value="<?php echo $endereco->complemento; ?>">

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-cadastrar">
                        Salvar <i class="fa fa-check"></i>
                    </button>
                </div>
            </form>
        </div>

    </section>
</div>