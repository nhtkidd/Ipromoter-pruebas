<?php

session_start();
include("conexion.php"); 

    if(isset($_POST["Correo"]) && isset($_POST["Contraseña"])){
        $correo = $_POST["Correo"];
        $contraseña = sha1($_POST["Contraseña"]);
        
        
        $query = "SELECT * FROM usuario WHERE correo = '$correo' 
            AND contraseña ='$contraseña' ";

        //echo $query;
        
        if(!$resultado = mysqli_query($conexion,$query)){
            exit(mysqli_error($conexion));
        }
        
        if(mysqli_num_rows($resultado)>0){
            $fila = mysqli_fetch_assoc($resultado);
            
            $_SESSION["idUsuario"]=$fila["idUsuario"];
            $_SESSION["nombre"]= $fila["nombre"];
            $_SESSION["apellidoPaterno"]=$fila["apellidoPaterno"];
            $_SESSION["apellidoMaterno"]= $fila["apellidoMaterno"];
            $_SESSION["correo"]= $fila["correo"];
            $_SESSION["contraseña"]= $fila["contraseña"];

            header("location:inicio.php");
        }else{
            echo '<h1 style="color: red">el usuario no existe, verifique el usuario y/o contraseña</h1>';
        }


    }

?>