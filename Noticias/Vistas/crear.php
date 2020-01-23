<?php
    require('./../../conexion.php');

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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="flexBox.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body class="flexColumn jCCenter aICenter">
    <h1>NOTICIAS</h1>
    <?php if($sesion){echo  "<h3>Bienvenido ".$_SESSION['username']."</h3>";}?>
    <div class="form flexColumn jCCenter aICenter">
        <h2>Agregar nueva noticia</h2>
        <form method="POST" action="./../crear.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="noticia[titulo]">Titulo:</label> 
                <input type="text" name="noticia[titulo]">
            </div>
            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" accept="image/*">
            </div>
            <div class="form-group">
                <label for="noticia[contenido]">Contenido:</label>
                <input type="text" name="noticia[contenido]">
            </div>
            <div class="form-group">
                <label for="noticia[fuente]">Fuente:</label>
                <input type="text" name="noticia[fuente]">
            </div>
            <div class="form-group">
                <label for="noticia[urlN]">URL:</label>
                <input type="text" name="noticia[urlN]">
            </div>
            <div class="form-group">
                <label for="noticia[fecha]">Fecha:</label>
                <input type="date" name="noticia[fecha]">
            </div>
            <button type="submit">Guardar</button>   
        </form>
    </div>
</body>
</html>