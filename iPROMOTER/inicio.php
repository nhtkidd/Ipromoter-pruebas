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
        <link rel="stylesheet" href="css/carrusel.css">
            <link rel="stylesheet" href="css/master.css">


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
        <a href="login_artista.php" class="dropdown-item">Se artista!</a>
        <div class="dropdown-divider"></div>
        <a href="cerrar_sesion.php" class="dropdown-item"> Cerrar sesion</a>
    </div>
</div>

</nav>
        </form>
      </div>
    </nav>
    
      <!-- fin barra de navegación-->
      <!--contenido -->
      <div class="container">
        <header>
          <h1 class="my-5 " style="font-size:90px;">
            <p class="text-light text-center " >Conoce a nuestros artistas destacados</p>
          </h1>
        </header>

        <!-- separacion-->
      

      <!--carruzel-->

<div class="wrapper">
  <section id="section1">
    <a href="#section3" class="arrow__btn">‹</a>
    <div class="item"> 
   
    <img src="https://media.resources.festicket.com/image/300x300/center/top/filters:quality(70)/www/artists/PostMalone_lTHCHHQ.jpg"width="275" height="300"/>

  </div>
    <div class="item">
     <img src="https://upload.wikimedia.org/wikipedia/commons/9/9c/Travis_Scott_February_2016.jpg" width="275" height="300"/>
  </div>
    <div class="item">
    <img src="https://i.pinimg.com/originals/df/f7/bc/dff7bc9ab5ab0b578e1f9e30fc7558a0.jpg" width="275" height="300"/>
  </div>
    <div class="item">
    <img src="https://images.clarin.com/2020/02/06/bad-bunny-no-se-calla___w23lDlS5_720x0__1.jpg" width="275" height="300"/>
  </div>
    <div class="item">
  </div>
    <a href="#section2" class="arrow__btn">›</a>
  </section>
  <section id="section2">
    <a href="#section1" class="arrow__btn">‹</a>
    <div class="item">
    <img src="https://media.resources.festicket.com/image/300x300/center/top/filters:quality(70)/www/artists/TylerIgor.jpg"width="275" height="300"/>
  </div>
    <div class="item">
    <img src="https://picnictv.cl/wp-content/uploads/2019/12/JOJI_WONDERLAND_RAWS0528-2.jpg" width="275" height="300"/>
  </div>
    <div class="item">
   <img src="https://cache.umusic.com/_sites/billieeilish/v2/images/pic-red.jpg"width="275" height="300"/>
  </div>
    <div class="item">
    <img src="https://mx.hola.com/imagenes/actualidad/20200315162783/noah-cyrus-mejores-canciones/0-796-493/noahcyrus2-a.jpg"width="275" height="300"/>
  </div>
    <div class="item">
    <img src=""/>
  </div>
    <a href="#section3" class="arrow__btn">›</a>
  </section>
  <section id="section3">
    <a href="#section2" class="arrow__btn">‹</a>
    <div class="item">
    <img src="https://partyflock.nl/images/artist/101202_404x404_454901/4B.webp"width="275" height="300"/>
  </div>
    <div class="item">
    <img src="https://photos.bandsintown.com/thumb/9035880.jpeg"width="275" height="300"/>
  </div>
    <div class="item">
    <img src="https://is3-ssl.mzstatic.com/image/thumb/Music123/v4/87/00/50/870050a0-9a3c-60b4-220a-673b9775e2d8/pr_source.png/800x800bb.jpeg"width="275" height="300"/>
  </div>
    <div class="item">
    <img src="https://www.edmtunes.com/wp-content/uploads/2019/03/86-og.jpg"width="275" height="300"/>
  </div>
    <div class="item">
    <img src=""/>
  </div>
    <a href="#section1" class="arrow__btn">›</a>
  </section>
</div>




       <!-- separacion-->
<
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
