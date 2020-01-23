<?php
    require('conexion.php');

    //Seleccionamos todos los datos de la tabla videojuegos
    $sql = "SELECT * FROM noticias";
    //Crear una varialbe que guarde los datos de la consulta
    $resultado =mysqli_query($conexion,$sql);
    //Crear variable que se encargara de manipular y contener el resultado
    $noticias = mysqli_fetch_all($resultado);

    $sql = "SELECT nombre FROM noticias, usuarios WHERE usuarios.id=noticias.id_Usuario";
    $resultado =mysqli_query($conexion,$sql);
    //Crear variable que se encargara de manipular y contener el resultado
    $nombres = mysqli_fetch_all($resultado);
   
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $sesion=true;
    } else {
        $sesion=false;
        // echo "Inicia Sesion para acceder a este contenido.<br>";
        // echo "<br><a href='login.html'>Login</a>";
        // echo "<br><br><a href='index.html'>Registrarme</a>";
        // header('Location: http://localhost/login/login.html');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion
        // exit;
        }
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="styles.css">
  <title>BIT News</title>
</head>

<body>

  <nav class="nav" id="nav">
    <a href="index.html"><img class="logo" src="Imagenes/logoW.png" alt="Pale blue dot logo"></a>

    <input class="menu-btn" type="checkbox" id="menu-btn">
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
      <div>
        <a href="index.html"><img class="textLogo" src="Imagenes/img2.png" alt=""></a>
        <div class="anclas">
          <li><a href="#registro">Registro</a></li>
          <?php if($sesion){
            echo '<li><a href="Usuarios/logout.php">Logout</a></li>';
          }else{
              echo '<li><a href="Usuarios/login.html">Login</a></li>';
            //echo '<li><a data-toggle="modal" data-target="#ventanaModal">Login</a></li>';
          }?>
          <li><a href="#contacto">Contacto</a></li>
        </div>
      </div>
    </ul>
  </nav>


  <section class="eventos pt-5">
    <!-- <h2>Eventos</h2> -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="https://www.pycon.co/" target="_blank"><img src="Imagenes/pycon.jpg" class="d-block w-100"
              alt="pycon"></a>
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item">
          <a href="https://www.facebook.com/events/678855636023963/?notif_t=event_has_tickets_available&notif_id=1579719849197390"
            target="_blank"><img src="Imagenes/agile_week.jpg" class="d-block w-100" alt="Agile week Globant">
          </a>
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
        <div class="carousel-item">
          <a href="https://angelhack.com/" target="_blank"><img src="Imagenes/AngelHack-1280x720.jpg"
              class="d-block w-100" alt="angelhack"></a>
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!-- Botón agregar noticias-ADMIN -->
  <!-- <a id="agregar" class="btn btn-primary" href="#" role="button" style="display: flex; justify-content: space-between;"><i class="fas fa-plus-circle"></i></a> -->
  <?php if($sesion){echo '<a id="agregar" class="btn btn-primary" href="Noticias/Vistas/crear.php" role="button" style="display: flex; justify-content: space-between;"><i class="fas fa-plus-circle"></i></a>';}?>
  <!-- Modal Login -->
  <div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana"
    aria-hidden="true">
    <div class="modal-dialog" role="document">

      <button class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
      </button>
      <!-- <div class="modal-header">
                <h5 id="tituloVentana">Login</h5>
                <img  class="imagen-login" src="img/fodo-login.jpeg" alt="fondo-login" width="360px" >
                <img  class="logo-login" src="img/img4.png" alt="logo" ></h4>
			</div> -->

      <!-- </div> -->
      <div class="modal-body">
        <div id="fondoDLogin" class="alert alert-success">

          <img class="imagen-login" src="Imagenes/fodo-login.jpeg" alt="fondo-login">
          <img class="logo-login" src="Imagenes/logoW.png" alt="logo"></h4>

          <form action="Usuarios/checklogin.php" method="post">
            <div class="form-group">
              <label id="letralabel" for="recipient-name" class="col-form-label">CORREO :</label>
              <input type="email" id="idmail" name="correo">
            </div>
            <div class="form-group">
              <label id="letralabel" for="message-text" class="col-form-label">CONTRASEÑA:</label>
              <input id="idpassword" type="password" name="contrasena"></input>
            </div>
            <div id="botonregistrar" class="form-group">
              <button id="botonAceptar" data-dismiss="modal">SING IN</button>
            </div>
            <div class="form-group opciones">
              <a href="#">Olvidaste tu contraseña?</a>
              <a href="#" id="cuenta">No tengo cuenta</a>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
  <!-- Modal Noticias-->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <main>
    <Section id="news">
      <?php foreach($noticias as $key=>$noticia): ?>
        <div class="contNews">
          <a  data-toggle="modal" data-target="#exampleModalLong">
            <div class = "imgNew">
            <img src="./Noticias/Imagenes/<?php echo $noticia[2];?>">
            </div>
            <div class="textNew">
              <h5 class= "tituloNew"><?php echo $noticia[1]; ?></h5>
              <div class="flexRow  jCBetween" style="align-self:stretch;">
                <span class = "fuenteNew"><?php echo $noticia[4];?></span>
                <span class = "horaNew"><?php echo $noticia[6]; ?></span>
              </div>
            </div>
          </a>  
          <div class = "elimEditar">
            <?php if($sesion){echo '<a id="eliminar" class="btn btn-primary" href="Noticias/eliminar.php?id='.$noticia[0].' role="button"><i class="far fa-trash-alt"></i></a>';}?>
            <?php if($sesion){echo '<a id="editar" class="btn btn-primary" href="Noticias/Vistas/modificar.php?id='.$noticia[0].' role="button"><i class="far fa-edit"></i></a>';}?>
            <a id="ver" class="btn btn-primary" href="Noticias/Vistas/mostrar.php?id=<?php echo $noticia[0]; ?>" role="button"><i class="fa fa-binoculars"></i></a>
          </div>
        </div>         
      <?php endforeach; ?>
    </Section>
  </main>

  
  <footer>
    <section id="nosotros">
    </section>
    <section id="social">
    </section>
    <section id="copyright"></section>

  </footer>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>