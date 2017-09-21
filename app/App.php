<?php

require_once 'Model.php';

function limitarTexto($texto, $limite, $final) {
    $contador = strlen($texto);

    if ($contador >= $limite):
        $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . $final;
        return $texto;
    else:
        return $texto;
    endif;
}

function urlBase() {
    return 'http://' . $_SERVER['SERVER_NAME'] . '/sysadmin/';
}

function urlPagina($viewName) {
    return urlBase() . 'admin/painel?view=' . $viewName;
}

function mostrarMensagem($tipo, $mensagem) {
    echo '<div class="alert-item alert-' . $tipo . '">' . $mensagem . '</div>';
}

function mascarar($string, $format) {
    $key = 0;
    $mask = '';

    for ($i = 0; $i <= strlen($format) - 1; $i++) {
        if ($format[$i] == '#'):
            if (isset($string[$key])):
                $mask .= $string[$key++];
            endif;
        else:
            if (isset($format[$i])):
                $mask .= $format[$i];
            endif;
        endif;
    }

    return $mask;
}

function apenasNumero($string) {
    return preg_replace('/[^0-9]/', '', $string);
}
