<?php
    //Solicitamoos la conexión a la Db a travez del método require()
    require('../conexion.php');
    //Creamos una variable que traiga los datos que el ususrario envia desde el formualrio
    $noticia=$_POST['noticia'];
    $imagen = $_FILES['imagen']['name'];
    //crear una variable que contendra la sentencia SQL para guardar
    //los datos en la tabla de la DB
    $fechax = strtotime($noticia['fecha']); //Convierte el string a formato de fecha en php
    $fecha = date('Y-m-d', $fechax); //Lo comvierte a formato de fecha en MySQL

    session_start();
    $ID_Usuario=$_SESSION['user_ID'];


    $msgerror = "";

    if (empty($noticia['titulo'])){
        $msgerror =  $msgerror . "Titulo NO puede estar en Blanco <br>";
    }
    if (empty($noticia['contenido'])){
        $msgerror =  $msgerror . "Contenido NO puede estar en Blanco <br>";
    }
    if (empty($noticia['fuente'])){
        $msgerror =  $msgerror . "Fuente NO puede estar en Blanco <br>";
    }
    $year = substr($fecha, 0, 4);
    if ($year < 1900 ){
        $msgerror =  $msgerror .  "Año de Noticia, solo desde 1901 <br>";
    }
    if (!empty($msgerror)) {
        echo " Error entontrados : <br> $msgerror ";

    } else {

        // Ruta donde se guardarán las imágenes que subamos
        $directorio = $_SERVER['DOCUMENT_ROOT'].'/Proyectos/bitNews/Noticias/Imagenes/';
        // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
        move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$imagen);


        $sql="INSERT INTO noticias (titulo,imagen,contenido,fuente,urlN,fecha,ID_Usuario)
        VALUES ('$noticia[titulo]','$imagen','$noticia[contenido]','$noticia[fuente]','$noticia[urlN]','$fecha','$ID_Usuario')";
        
        //El metodo mysqli_query envía los datos
        //Necesita la conexion y sentencia SQL
        $resultado=mysqli_query($conexion, $sql);
        //Direccionamiento de rutas
        header('Location: ./../index.php');
    }


    

?>