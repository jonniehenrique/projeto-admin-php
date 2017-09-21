<?php
ob_start();
session_start();

require_once '../app/App.php';
require_once '../app/Model.php';
require_once '../app/Logout.php';

if (!isset($_SESSION['usuario']) && (!isset($_SESSION['senha']))):
    header('Location: ' . urlBase() . 'admin/index');
    exit;
endif;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta name="author" content="Jonnie Henrique | Desenvolvimento web">
        <meta name="description" content="Painel administrativo">
        <meta name="theme-color" content="#2196F3">
        <meta name="apple-mobile-web-app-status-bar-style" content="#2196F3">

        <title> Painel Admin </title>

        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/admin.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>

    <?php include_once 'includes/header.php'; ?>

        <main class="content">
            <div class="alert"></div>

            <?php
            if (isset($_GET['view'])):
                include_once 'views/' . $_GET['view'] . '.php';
            else:
                include_once 'views/inicio.php';
            endif;
            ?>

        </main>

    <?php include_once 'includes/footer.php'; ?>

    </body>
</html>

