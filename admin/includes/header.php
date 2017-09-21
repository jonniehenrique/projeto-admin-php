<?php
$empresa = getByID('configuracoes', 1);
?>
<header id="header">
    <div class="container">
        <div class="header-left">
            <button type="button" class="btn-menu">
                <i class="fa fa-bars"></i>
            </button>
            <h1 class="header-logo">
                <a href="<?php echo urlPagina('inicio') ?> " class="header-logo-link"><b> Sys</b>Admin </a>
            </h1>	
        </div>
        <?php include_once 'menu.php'; ?>
    </div>
</header>