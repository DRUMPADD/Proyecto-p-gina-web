<?php
    session_start();

    unset($_SESSION['txtCorreo']);
    unset($_SESSION['txtContraseña']);

    session_destroy();

    header("location: registro_a.html");
?>