<?php

if (isset($_REQUEST['logout'])):
    session_destroy();
    session_unset($_SESSION['usuario']);
    session_unset($_SESSION['senha']);

    header('Location: ' . urlBase() . 'admin/index');

endif;