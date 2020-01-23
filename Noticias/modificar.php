<?php
    //Solicitamoos la conexión a la Db a travez del método require()
    require('../conexion.php');
    $noticia=$_POST['noticia'];
    $imagen = $_FILES['imagen']['name'];
    //crear una variable que contendra la sentencia SQL para guardar
    //los datos en la tabla de la DB
    
    $fechax = strtotime($noticia['fecha']); //Convierte el string a formato de fecha en php

    $fecha = date('Y-m-d', $fechax); //Lo comvierte a formato de fecha en MySQL

    // Ruta donde se guardarán las imágenes que subamos
    $directorio = $_SERVER['DOCUMENT_ROOT'].'/Proyectos/bitNews/Noticias/Imagenes/';
    // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
    move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$imagen);
    //crear una variable que contendra la sentencia SQL para guardar
    //los datos en la tabla de la DB
    $sql="UPDATE noticias SET titulo='$noticia[titulo]', imagen='$imagen', contenido='$noticia[contenido]', fuente='$noticia[fuente]', urlN='$noticia[urlN]', fecha='$fecha', ID_Usuario='$noticia[user]' WHERE id='$noticia[id]'";

    //El metodo mysqli_query envía los datos
    //Necesita la conexion y sentencia SQL
    mysqli_query($conexion, $sql);

    //Direccionamiento de rutas
    header('Location: ./../index.php');
?>