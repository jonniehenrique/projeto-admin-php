<?php

function conectar() {
    try {
        $conexao = new PDO('mysql:host=localhost;dbname=sysblog', 'root', '');
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $E) {
        echo 'ERROR! ' . $E->getMessage();
    }

    return $conexao;
}

function getAll($table) {
    $conexao = conectar();

    $sql = "SELECT * FROM $table";

    $res = $conexao->prepare($sql);
    $res->execute();

    if ($res->rowCount() > 0):
        $result = $res->fetchAll(PDO::FETCH_OBJ);
    else:
        $result = '';
    endif;

    return $result;
}

function getByID($table, $id) {
    $conexao = conectar();

    $sql = "SELECT * FROM $table WHERE id = '$id' LIMIT 1";

    $res = $conexao->prepare($sql);
    $res->execute();

    if ($res->rowCount() > 0):
        $result = $res->fetch(PDO::FETCH_OBJ);
    else:
        header('Location: ' . urlBase() . 'admin/painel?view=404');
    endif;

    return $result;
}
