<?php
    require('./../../conexion.php');

    //Seleccionamos todos los datos de la tabla videojuegos
    $id=$_GET['id'];
    $sql = "SELECT * FROM noticias WHERE id='$id'";
    //Crear una varialbe que guarde los datos de la consulta
    $resultado =mysqli_query($conexion,$sql);
    //Crear variable que se encargara de manipular y contener el resultado
    $noticia = mysqli_fetch_all($resultado);

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
            <th>LLAVE</th>
            <th>VALOR</th>
        </tr>
        <tr>
            <td>ID:</td>
            <td><?php echo $noticia[0][0]; ?></td>
        </tr>
        <tr>
            <td>Titulo:</td>
            <td><?php echo $noticia[0][1]; ?></td>
        </tr>
        <tr>
            <td>Imagen:</td>
            <td><img src="./../Imagenes/<?php echo $noticia[0][2];?>" width="250"/></td>
        </tr>
        <tr>
            <td>Contenido:</td>
            <td><?php echo $noticia[0][3]; ?></td>
        </tr>
        <tr>
            <td>Fuente:</td>
            <td><?php echo $noticia[0][4]; ?></td>
        </tr>
        <tr>
            <td>URL:</td>
            <td><?php echo $noticia[0][5]; ?></td>
        </tr>
        <tr>
            <td>Fecha:</td>
            <td><?php echo $noticia[0][6]; ?></td>
        </tr> 
        <tr>
            <td>Editado por:</td>
            <td><?php echo $nombres[0][0]; ?></td>
        </tr>  
        <tr>
            <td>Ultima modificación:</td>
            <td><?php echo $noticia[0][8]; ?></td>
        </tr>      
        <!-- <?php if($sesion){echo '<td><a href="eliminar.php?id='.$noticia[0][0].'">X</a></td>';}?>
        <?php if($sesion){echo '<td><a href="modificarVista.php?id='.$noticia[0][0].'">Edit</a></td>';}?> -->
    </table>
</body>
</html>