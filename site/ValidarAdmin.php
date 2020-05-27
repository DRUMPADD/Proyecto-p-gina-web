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

    $sql = "SELECT * from administradores where Matricula = '$co' and Contraseña = '$con'";
    $consulta = mysqli_query($conectar,$sql);
    $num2 = mysqli_fetch_array($consulta);

    if($num2 > 0){
        header("location: http://localhost:8080/Diseño_pagina/site/index.html");
    }else{
        echo '<script>
            alert("Matricula o contraseña incorrecta");
        </script>';
        header("location: http://localhost:8080/Diseño_pagina/site/registro_a.html");
    }
?>