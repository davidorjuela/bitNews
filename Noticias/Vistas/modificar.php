 <?php
    require('./../../conexion.php');

    //Seleccionamos todos los datos de la tabla videojuegos
    $id=$_GET['id'];
    $sql = "SELECT * FROM noticias WHERE id='$id'";
    //Crear una varialbe que guarde los datos de la consulta
    $resultado =mysqli_query($conexion,$sql);
    //Crear variable que se encargara de manipular y contener el resultado
    $noticia = mysqli_fetch_all($resultado);
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
    <h1>Editar "<?php echo $noticia[0][1] ?>"</h1>
    <form action="./../modificar.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="noticia[id]" value="<?php echo $noticia[0][0]; ?>" style="display:none">
        <div class="form-group">
            <label for="noticia[titulo]">Titulo:</label> 
            <input type="text" name="noticia[titulo]" value="<?php echo $noticia[0][1]; ?>">
        </div>
        <div class="form-group">
            <label for="imagen">Imagen:</label><br>
            <img src="./../Imagenes/<?php echo $noticia[0][2];?>" width="250"/><br>
            <input type="file" name="imagen" accept="image/*">
        </div>
        <div class="form-group">
            <label for="noticia[contenido]">Contenido:</label>
            <input type="text" name="noticia[contenido]" value="<?php echo $noticia[0][3]; ?>">
        </div>
        <div class="form-group">
            <label for="noticia[fuente]">Fuente:</label>
            <input type="text" name="noticia[fuente]" value="<?php echo $noticia[0][4]; ?>">
        </div>
        <div class="form-group">
            <label for="noticia[urlN]">URL:</label>
            <input type="text" name="noticia[urlN]" value="<?php echo $noticia[0][5]; ?>">
        </div>
        <div class="form-group">
            <label for="noticia[fecha]">Fecha:</label>
            <input type="date" name="noticia[fecha]" value="<?php echo $noticia[0][6]; ?>">
        </div>
        <button type="submit">Guardar</button>  
        <!-- <input type="hidden" value="Usuario"  id="pageOperation"   name="pageOperation"/>
        <input type="submit" value="Cancelar" id="evento_cancelar" name="evento_cancelar"/>
        <input type="submit" value="Eliminar" id="evento_eliminar" name="evento_eliminar"/>
        <input type="submit" value="Guardar"  id="evento_guardar"  name="evento_guardar"/>   -->
    </form>
</body>

</form>
</html>