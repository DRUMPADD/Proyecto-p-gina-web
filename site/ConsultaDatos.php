<?php
    $servidor = "127.0.0.1";
    $usuario = "root";
    $pass = "";
    $bd = "bd_aplicacion";

    $conectar = mysqli_connect($servidor,$usuario,$pass,$bd);

    if(!$conectar){
        die(mysqli_connect_error());
    }

    $mat = $_POST['Matricula'];
    $nom= $_POST['Nombre'];	
    $ap = $_POST['ApellidoPaterno'];	
    $am = $_POST['ApellidoMaterno'];	
    $eda = $_POST['Edad'];	
    $tel = $_POST['Telefono'];	
    $pais = $_POST['PaisResidencia'];		
    $car = $_POST['Carrera'];	
    $co = $_POST['Correo'];
    $con = $_POST['Contraseña'];

    $inserta = "INSERT INTO registro_alumno values('$mat','$nom','$ap','$am','$eda','$tel','$pais','$car','$co','$con')";
    $consulta = mysqli_query($conectar,$inserta);

    
    // if(isset($_POST['registrar'])){
    //     $nom= $_POST['Nombre'];	
    //     $ap = $_POST['ApellidoPaterno'];	
    //     $am = $_POST['ApellidoMaterno'];	
    //     $eda = $_POST['Edad'];	
    //     $tel = $_POST['Telefono'];	
    //     $pais = $_POST['PaisResidencia'];	
    //     $mat = $_POST['Matricula'];	
    //     $car = $_POST['Carrera'];	
    //     $co = $_POST['Correo'];
    //     $con = $_POST['Contraseña'];

        
    //     $comprobarnombre = mysqli_fetch_array(mysqli_query($conectar,"SELECT Nombre from registro_alumno where Nombre = '$nom'"));
    //     $comprobarap = mysqli_fetch_array(mysqli_query($conectar,"SELECT ApellidoPaterno from registro_alumno where ApellidoPaterno = '$ap'"));
    //     $comprobaram = mysqli_fetch_array(mysqli_query($conectar,"SELECT ApellidoMaterno from registro_alumno where ApellidoMaterno = '$am'"));
    //     $comprobaredad = mysqli_fetch_array(mysqli_query($conectar,"SELECT Edad from registro_alumno where Contraseña = '$eda'"));
    //     $comprobartel = mysqli_fetch_array(mysqli_query($conectar,"SELECT Telefono from registro_alumno where Contraseña = '$tel'"));
    //     $comprobarpais = mysqli_fetch_array(mysqli_query($conectar,"SELECT PaisResidencia from registro_alumno where PaisResidencia = '$pais'"));
    //     $comprobarmat = mysqli_fetch_array(mysqli_query($conectar,"SELECT Matricula from registro_alumno where Matricula = '$mat'"));
    //     $comprobarcarrera = mysqli_fetch_array(mysqli_query($conectar,"SELECT Carrera from registro_alumno where Carrera = '$con'"));
    //     $comprobararcorreo = mysqli_fetch_array(mysqli_query($conectar,"SELECT Correo from registro_alumno where Correo = '$co'"));
    //     $comprobarcontra = mysqli_fetch_array(mysqli_query($conectar,"SELECT Contraseña from registro_alumno where Contraseña = '$con'"));
        
    //     if($comprobarnombre > 0){
    //         <script>
    //             alert("La matricula ya existe");
    //         </script>
    //     }else if($comprobararap > 0){
    //             <script>
    //                 alert("El correo ya existe");
    //             </script>;
    //         }else if ($comprobaram > 0){
    //             <script>
    //                 alert("La contraseña ya existe");
    //             </script>;
    //         }else if ($comprobaredad > 0){
    //             <script>
    //                 alert("La contraseña ya existe");
    //             </script>;
    //         }else if ($comprobartel > 0){
    //             <script>
    //                 alert("La contraseña ya existe");
    //             </script>;
    //         }else if ($comprobarpais > 0){
    //             <script>
    //                 alert("La contraseña ya existe");
    //             </script>;
    //         }else if ($comprobarmat > 0){
    //             <script>
    //                 alert("La contraseña ya existe");
    //             </script>;
    //         }else if ($comprobarcarrera > 0){
    //             <script>
    //                 alert("La contraseña ya existe");
    //             </script>;
    //         }else if ($comprobarcorreo > 0){
    //             <script>
    //                 alert("La contraseña ya existe");
    //             </script>;
    //         }else if ($comprobarcontra > 0){
    //             <script>
    //                 alert("La contraseña ya existe");
    //             </script>;
    //         }
    //     }
    // }
?>