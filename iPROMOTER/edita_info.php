<?php

    include("conexion.php"); 
    //Variable global $_POST

    if(isset($_POST["idUsuario"]) && isset($_POST["nombre"]) && isset($_POST["apellidoPa"]) && isset($_POST["apellidoMa"]) && isset($_POST["telefono"]) && isset($_POST["correo"]) && isset($_POST["contraseña"])){
        
        //Una vez validadas las variables globales , es decir, que existen, se procede a leer su contenido.
        $id = $_POST["nombre"];
        $nombre = $_POST['nombre'];
        $apellidop = $_POST['apellidoPa'];
        $apellidom = $_POST['apellidoMa'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $contraseña =sha1($_POST["contraseña"]);
        
        
        //Guardar los datos en la base de datos, utilizando sql.
        $query = "UPDATE  usuario SET (nombre = '".$nombre."', apellidoPaterno='".$apellidop."', apellidoMaterno='".$apellidom."',correo='".$correo."', contraseña='".$contraseña."' , telefono='".$telefono."'
        WHERE idUsuario = '$id' ";
         

        if(!$resultado = mysqli_query($conexion,$query)){
            exit(mysqli_error($conexion));
        }
        
        echo"<script> alert('la edicion  de tus datos se ha concluido de manera exitosa');</script>";

    }else{
        echo "hubo un error al intentar leer los datos";
    }
?>