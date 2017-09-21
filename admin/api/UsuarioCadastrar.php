<?php

require_once '../../app/App.php';

if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['usuario']) && isset($_POST['senha']) && isset($_POST['nivel'])):

    $nome = trim(addcslashes($_POST['nome'], ''));
    $email = trim(addcslashes($_POST['email'], ''));
    $usuario = trim(addcslashes($_POST['usuario'], ''));
    $senha = md5(trim(addcslashes($_POST['senha'], '')));
    $nivel = trim(addcslashes($_POST['nivel'], ''));

    $conexao = conectar();

    $sql = "INSERT into login (nome, email, usuario, senha, nivel) VALUES (:nome, :email, :usuario, :senha, :nivel)";

    $res = $conexao->prepare($sql);

    $res->bindParam(':nome', $nome, PDO::PARAM_STR);
    $res->bindParam(':email', $email, PDO::PARAM_STR);
    $res->bindParam(':usuario', $usuario, PDO::PARAM_STR);
    $res->bindParam(':senha', $senha, PDO::PARAM_STR);
    $res->bindParam(':nivel', $nivel, PDO::PARAM_STR);

    $res->execute();

    if ($res->rowCount() > 0):
        echo true;
    else:
        echo false;
    endif;

endif;