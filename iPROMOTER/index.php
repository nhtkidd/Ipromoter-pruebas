<?php

  session_start();
  if(!isset($_SESSION["nombre"])){
    header('Location:inicioses.html');
}
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <title>iPromoter "Crea, conoce y triunfa "</title>
    <link rel="shortcut icon"type="image/x-icon" href="copia.ico">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/master.css">
       <link href="product.css" rel="stylesheet">

    </head>
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
              <a style="color: white" class="nav-link" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a  style="color: white" class="nav-link" href="registrarse.html">Registrate</a>
            </li>
             <li class="nav-item">
            <a  style="color: white" class="nav-link" href="inicioses.html">Incia sesión</a>
          </li>
            <li class="nav-item dropdown">
              <a  style="color: white" class="nav-link dropdown-toggle" href="artistas.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categorias
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="musicos.html">Musicos</a>


              </div>
            </li>

          </ul>
          <div class="btn-group" style="text-align: left;"   >
    <button type="button" class="btn btn-primary" style=" background-color:#23232F;  border-color:black;"> Estás logeado como : <?php echo $_SESSION["nombre"]?> </button>
    <button type="button"   style=" background-color:#23232F; border-color:black;" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu" >
    <a href="#" class="dropdown-item"><?php echo $_SESSION["correo"] ?></a>
        <a href="perfil_usu.php" class="dropdown-item">Editar perfil</a>
        <a href="login_artista.php" class="dropdown-item">Se artista!</a>
        <div class="dropdown-divider"></div>
        <a href="cerrar_sesion.php" class="dropdown-item"> Cerrar sesion</a>
    </div>
</div>
        </div>
      </nav>
      <!-- fin barra de navegación-->
      <!--contenido -->
      <div class="container">
        <header>
        
        </header>

       
        <!-- separacion-->
        <div style="margin-top: 200px" class="row">
          <div class="col-lg-6">
            <h1 class="my-5 " style="font-size:100px;">
            <p class="text-light text-center " >iPromoter.</p>
          </h1>
           

          </div>
          <div class="col-lg-6 text-light">
            <h2>¿Quienes somos?</h2>
            <p>iPromoter ha sido pensado para los artistas locales, es una pagina web destinada al apoyo a los pequeños artistas que están o ya hayan iniciado en esta grandiosa labor, el entretenimiento, por lo que les brindamos el espacio para poder promocionarse y así mas gente reconozca tu trabajo.”.</p>
            <p>aqui podras exponer parte de tu trabajo asi como poner enlaces a tus cuentas personales para que la gente pueda contactarte, ademas podras subir muetsras de tu trabajo y asi poder llegar a más gente</p>
          </div>
        </div>
      </div>


      <!--carruzel-->
      <div class="container bg-transparent" style="margin-top:100px;">
        <h1>
          <p class="text-light text-center">Muestrales tu trabajo al mundo :)</p>
        </h1>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top:100px;">
  <ol class="carousel-indicators">
    <li data-target="Consigue la oportunidad de triunfar en tus sueños" data-slide-to="0" class="active"></li>
    <li data-target="Enlaza tus redes sociales y asi como tus espacios de trabajo" data-slide-to="1"></li>
    <li data-target="Logra grandes cosas" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/redes.png" class="d-block w-100" height="400">
      <div class="carousel-caption d-none d-md-block">
    <h5>Enlaza tus redes sociales y asi como tus espacios de trabajo</h5>
    <p></p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="imagenes/crea.png" class="d-block w-100"  height="400">
      <div class="carousel-caption d-none d-md-block">
    <h5>Consigue la oportunidad de triunfar en tus sueños</h5>
    <p>...</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="http://theelectroside.com/wp-content/uploads/2016/11/6M2A0899-750x400.jpg" class="d-block w-100" height="400">
      <div class="carousel-caption d-none d-md-block">
    <h5>Logra grandes cosas</h5>
    <p>...</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-right text-white overflow-hidden" style="margin-left: 50px; width: 1200px; height: 400px">
        <div class="my-3 py-3">
        
          <h2 class="display-5">Promocionate y Hazte crecer como Artista</h2>
          <p class="lead">crea tu perfil, sube informacion acerca de ti</p>
          <p class="lead">sube contenido, enlaza tus redes sociales y </p>
          <p class="lead">crea tu espacio en el cual muchas personas podran ver tu trabajo!</p>
        </div>
        <img src="https://cdn140.picsart.com/277325111008211.png?type=webp&to=min&r=640"style="margin-right:700px; margin-top: -350px; border-radius: 500px; ">
        <div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
    </div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden" style="margin-left: 50px; width: 1200px; height: 400px">
        <div class="my-3 py-3">
        	
          <h2 class="display-5">Recibe comentarios y calificaciones !</h2>
          <p class="lead">Los visitantes que visiten tu perfil, </p>
          <p class="lead">podran calificar tu trabajo así como </p>
         	<p class="lead"> dejar comentarios en tu propio perfil!</p>
          <img style="margin-left: 700px; margin-top: -200px;" src="https://www.plans.com.mx/wp-content/uploads/2019/01/4-Estrellas-300x82.png">
        </div>
        <div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
  </div>
  <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden" style="margin-left: 50px; width: 1200px; height: 400px">
        <div class="my-3 py-3">
        	
          <h2 class="display-5">Enlaza tus Redes Sociales !</h2>
          <p class="lead">Enlaza tus perfiles de trabajo en las redes sociales asi como tus plataformas de streaming,
          donde se encuentre tu trabajo para que de esta manera, puedan seguir tu trabajo! </p>
          <img style=" width: 80px; margin-right:-200px; margin-top: 50px;" src="imagenes/facebook.png">
           <img style=" width: 80px; margin-left: 250px; margin-top: 50px;" src="imagenes/youtube.png">
          <img style=" width: 80px; margin-left: -350px; margin-top: 50px;" src="imagenes/instagram.png">
          <img style=" width: 80px; margin-left: 300px; margin-top: 50px;" src="imagenes/spotify.png">
          <img style=" width: 80px; margin-right:-100px;margin-left: 30px; margin-top: 50px;" src="https://images.vexels.com/media/users/3/137412/isolated/preview/1802b9d8ce3c819eebe90a86bbb61077-logo-de-icono-de-soundcloud-by-vexels.png">
        </div>
        <div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
  </div>






















      <footer class="py-3 bg-dark mt-5">
        <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; Ipromoter 2020</p>
        </div>
        <!-- /.container -->
      </footer>





      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
