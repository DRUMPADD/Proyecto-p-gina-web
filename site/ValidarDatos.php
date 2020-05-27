<?php
    $servidor = "127.0.0.1";
    $usuario = "root";
    $pass = "";
    $bd = "bd_aplicacion";

    $conectar = mysqli_connect($servidor,$usuario,$pass,$bd);

    if(!$conectar){
        die(mysqli_connect_error());
    }

    $co = $_POST["txtMatricula"];
    $con = $_POST["txtContraseña"];
    $comprobar = $_POST["CheckAdmin"];

    $sql = "SELECT * from registro_alumno where Matricula = '$co' and Contraseña = '$con'";
    $consulta = mysqli_query($conectar,$sql);
    $num = mysqli_fetch_array($consulta);

    $sql2 = "SELECT * from administradores where Matricula = '$co' and Contraseña = '$con'";
    $consulta2 = mysqli_query($conectar,$sql2);
    $num2 = mysqli_fetch_array($consulta2);

    

    if($num > 0 and $comprobar == false){
        header("location: http://localhost:8080/Diseño_pagina/site/index.html");
    }else if($num2 > 0 and $comprobar == true){
        header("location: http://localhost:8080/Diseño_pagina/site/indexAdmin.html");
    }else{
        header("location: http://localhost:8080/Diseño_pagina/site/registro_a.html");
    }
?>