<?php
ob_start();
session_start();

require_once '../app/App.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Faça seu login | Painel administrativo</title>

        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto">

        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/login.css">
    </head>
    <body data-app="<?php echo urlBase(); ?> ">
        <div class="alert"></div>

        <div class="login flex-center">
            <section class="login-form flex-center flex-column">
                <h2 class="login-title"> <i class="fa fa-user"></i> Faça seu login </h2>
                <form id="login-form" enctype="multipart/form-data" class="flex-center flex-column">
                    <input type="text" placeholder="Digite seu login" name="login" autocomplete="off">
                    <input type="password" placeholder="Digite sua senha" name="senha" autocomplete="off">

                    <button class="btn btn-primary btn-login"> Login <i class="fa fa-chevron-right"></i></button>
                </form>
            </section>
        </div>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/modules/Login.js"></script>
        <script src="assets/js/controllers/login.js"></script>
    </body>
</html>