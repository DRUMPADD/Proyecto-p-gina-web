<?php
    include "config.php";
    session_start();
    extract($_REQUEST);

    mysql_connect($host,$user,$pass);
    mysql_select_db($bd);
?>