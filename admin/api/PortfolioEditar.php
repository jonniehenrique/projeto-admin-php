<?php

require_once '../../app/App.php';

if (isset($_POST['id'])):

    $id = trim(addcslashes($_POST['id'], ''));
    $titulo = trim(addcslashes($_POST['titulo'], ''));
    $url = trim(addcslashes($_POST['url'], ''));
    $descricao = trim(addcslashes($_POST['descricao'], ''));

    /* $foto 		= $_FILES['foto'];

      if (isset($foto) && ! empty($foto['tmp_name'] )):
      $permitidos = array('image/png', 'image/jpg', 'image/jpeg');

      if (in_array($foto['type'], $permitidos)):
      $novoNome = md5(time().rand(0, 999)).'.jpg';

      move_uploaded_file($foto['tmp_name'], urlBase() . 'upload/portfolio/' . $novoNome);
      endif;

      endif;
     */

    $conexao = conectar();

    $sql = "UPDATE portfolio SET titulo = '$titulo', url = '$url', descricao = '$descricao' WHERE id = '$id' ";

    $res = $conexao->prepare($sql);

    $res->bindParam(':titulo', $titulo, PDO::PARAM_STR);
    $res->bindParam(':url', $url, PDO::PARAM_STR);
    $res->bindParam(':descricao', $descricao, PDO::PARAM_STR);

    $res->execute();

    if ($res->rowCount() > 0):
        echo true;
    else:
        echo false;
    endif;

endif;