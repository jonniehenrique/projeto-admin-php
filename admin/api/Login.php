<?php

require_once '../../app/App.php';
require_once '../../app/Model.php';

if (!empty($_POST['login']) && !empty($_POST['senha'])):

    $login = preg_replace('/[^[:alpha:]_]/', '', $_POST['login']);
    $senha = preg_replace('/[^[:alnum:]_]/', '', $_POST['senha']);

    $conexao = conectar();

    $sql = "SELECT * FROM login WHERE usuario = '$login' AND senha = '$senha' LIMIT 1 ";

    $res = $conexao->prepare($sql);

    $res->bindValue(':usuario', $login);
    $res->bindValue(':senha', $senha);

    $res->execute();

    if ($res->rowCount() > 0):
        session_start();

        $_SESSION['usuario'] = $login;
        $_SESSION['senha'] = $senha;

        echo true;
    endif;
else:
    echo false;
endif;

