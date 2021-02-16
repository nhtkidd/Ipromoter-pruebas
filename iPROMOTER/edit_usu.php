<?php

  session_start();
  if(!isset($_SESSION["nombre"])){
    header('Location:inicioses.html');
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<style>
    body{
    background:#72748e;
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #23232F;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: white;
    font-size: 40px;
}
.profile-head h6{
    color: white;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 20px;
    color: white;
    margin-top: 5%;
}

.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: white;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: white;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
    color: white;
}
.profile-tab p{
    font-weight: 600;
    color: white;
}
</style>
<body>

<!------ Include the above in your HEAD tag ---------->
<body style="background-color: #23232F;">
      <!-- barra de navegación -->
      <nav class="navbar navbar-expand-lg navbar-light background-color:#23232F;">
          <img src="imagenes/microwe.png" width="30px" >
        <a   style="color: white"class="navbar-brand" href="index.php">iPromoter</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link"style="color: white" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"style="color: white" href="registrarse.html">Registrate</a>
          </li>
           <li class="nav-item">
            <a class="nav-link"style="color: white" href="inicioses.html">Incia sesión</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color: white" href="artistas.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categorias
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="musicos.html">Musicos</a>
              </div>
            </li>
    </ul>
  </div>
  <div class="btn-group" style="text-align: left;"   >
    <button type="button" class="btn btn-primary" style=" background-color:#23232F;  border-color:black;"> Estás logeado como : <?php echo $_SESSION["nombre"]?> </button>
    <button type="button"   style=" background-color:#23232F; border-color:black;" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu" >
    <a href="#" class="dropdown-item"><?php echo $_SESSION["correo"] ?></a>
        <a href="perfil_usu.php" class="dropdown-item">Editar perfil</a>
        <a href="perfil_usu.php" class="dropdown-item">Se artista!</a>
        <div class="dropdown-divider"></div>
        <a href="cerrar_sesion.php" class="dropdown-item"> Cerrar sesion</a>
    </div>
</div>

</nav>
        </form>
      </div>
    </nav>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    <?php echo $_SESSION["nombre"] ?>
                                    </h5>
                                  
                                    <p class="proile-rating">Usuario de iPromoter <span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab"  role="tab" aria-controls="home" aria-selected="true">Tu información</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>   
                </div>

                
<form action="REGISTROEXITOSO.html">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


                

</body>
</html>