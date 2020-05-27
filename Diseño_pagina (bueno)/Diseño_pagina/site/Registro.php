<?php
    $servidor = "127.0.0.1";
    $usuario = "root";
    $pass = "";
    $bd = "bd_aplicacion";

    $conectar = mysqli_connect($servidor, $usuario, $pass, $bd);

    if(!$conectar){
        die(mysqli_connect_error());
    }

    if(isset($_POST['registrar'])){
        $nom= $_POST['Nombre'];	
        $ap = $_POST['ApellidoPaterno'];	
        $am = $_POST['ApellidoMaterno'];	
        $eda = $_POST['Edad'];	
        $tel = $_POST['Telefono'];	
        $pais = $_POST['PaisResidencia'];	
        $mat = $_POST['Matricula'];	
        $car = $_POST['Carrera'];	
        $co = $_POST['Correo'];
        $con = $_POST['Contraseña'];

        
    $inserta = "INSERT INTO registro_alumno values('$mat','$nom','$ap','$am','$eda','$tel','$pais','$car','$co','$con')";
    $consulta = mysqli_query($conectar,$inserta);   
?>