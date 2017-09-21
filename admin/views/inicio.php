<div class="container">

    <header class="main-header">
        <h2 class="main-title">Inicio</h2>
    </header>

    <section class="main-section">
        <h3 class="main-subtitle"> 
            Olá, seja bem vindo, <?php echo ucfirst($_SESSION['usuario']); ?>!  
        </h3>
    </section>

</div>

<br><br>

<div class="container">
    <div class="flex">
        <div class="flex-item">
            <header class="main-header">
                <h2 class="main-title"> Últimos projetos </h2>
            </header>

            <?php $projetos = getAll('portfolio'); ?>

            <section class="main-section">
                <div class="main-content">
                    <ul class="mais-recentes">
                        <?php if ($projetos): ?>
                            <?php foreach ($projetos as $projeto): ?>
                                <li> 
                                    <a href="<?php echo urlPagina('portfolio-editar&id=' . $projeto->id . ''); ?>"><?php echo $projeto->titulo; ?> </a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </section>
        </div>
        <div class="flex-item">
            <header class="main-header">
                <h2 class="main-title">Últimos usuários </h2>
            </header>

            <?php $usuarios = getAll('login'); ?>

            <section class="main-section">
                <div class="main-content">
                    <ul class="mais-recentes">
                        <?php if ($usuarios): ?>
                            <?php foreach ($usuarios as $usuario): ?>
                                <li> <a href="<?php echo urlPagina('usuario-editar&id=' . $usuario->id . ''); ?>"><?php echo $usuario->nome; ?> </a></li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</div>

