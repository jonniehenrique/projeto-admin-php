<?php

require_once '../../app/App.php';

if (isset($_POST['nome']) && isset($_POST['contato']) && isset($_POST['identificacao'])):

    $nome = addcslashes($_POST['nome']);
    $contato = apenasNumero(addcslashes($_POST['contato']));
    $identificacao = apenasNumero(addcslashes($_POST['identificacao']));

    $conexao = conectar();

    $sql = "UPDATE configuracoes SET nome = '$nome', contato = '$contato', identificacao = '$identificacao' WHERE id = 1";

    $res = $conexao->prepare($sql);

    $res->bindParam(':nome', $nome, PDO::PARAM_STR);
    $res->bindParam(':contato', $contato, PDO::PARAM_STR);
    $res->bindParam(':identificacao', $identificacao, PDO::PARAM_STR);
    $res->execute();

    if ($res->rowCount() > 0):
        echo true;
    else:
        echo false;
    endif;
endif;