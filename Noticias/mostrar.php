<?php
    require('../conexion.php');

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
    <title>Document</title>
</head>
<body class="flexColumn jCCenter aICenter">
    <h1>NOTICIA</h1>
    <?php if($sesion){echo  "<h3>Bienvenido ".$_SESSION['username']."</h3>";}?>
    <table>
        <tr>
            <th>ID</th>
            <th>TITULO</th>
            <th>IMAGEN</th>
            <th>CONTENIDO</th>
            <th>FUENTE</th>
            <th>URL</th>
            <th>FECHA</th>
            <th>EDITADO</th>
            <th>RESPONSABLE</th>
        </tr>
   
    <?php foreach($noticias as $key=>$noticia): ?>
        <tr>
            <td><?php echo $noticia[0]; ?></td>
            <td><?php echo $noticia[1]; ?></td>
            <td><img src="Noticias/Imagenes/<?php echo $noticia[2];?>" width="250"/></td>
            <td><?php echo $noticia[3]; ?></td>
            <td><?php echo $noticia[4]; ?></td>
            <td><?php echo $noticia[5]; ?></td>
            <td><?php echo $noticia[6]; ?></td>
            <td><?php echo $noticia[8]; ?></td>
            <td><?php echo $nombres[$key][0]; ?></td>
            <?php if($sesion){echo '<td><a href="eliminar.php?id='.$noticia[0].'">X</a></td>';}?>
            <?php if($sesion){echo '<td><a href="modificarVista.php?id='.$noticia[0].'">Edit</a></td>';}?>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>