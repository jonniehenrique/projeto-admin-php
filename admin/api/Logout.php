<?php

ob_start();
session_start();

require_once '../../app/App.php';

if (isset($_POST['logout'])):
    session_destroy();

    session_unset($_SESSION['usuario']);
    session_unset($_SESSION['senha']);
endif;