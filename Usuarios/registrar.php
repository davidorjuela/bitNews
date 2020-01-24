<!-- 
Creado por Luisetfree & tecnosetfree
Web: http://luisetfree.over-blog.es
Facebook:https://www.facebook.com/tecnosetfree/
Twitter: @tecnosetfree
Apoyanos con tus visitas y comentarios en nuestras redes sociales para seguir avanzando y traer contenido de calidad.

 -->
<?php
//incluimos el archivo donde se encuentran nuestros datos de conexion
require('../conexion.php');
 
 $usuario = $_POST['user'];


 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $buscarUsuario = "SELECT * FROM usuarios WHERE nombre = '$usuario[nombre]' ";
 $result = $conexion->query($buscarUsuario);
 $countNombre = mysqli_num_rows($result);

 $buscarCorreo = "SELECT * FROM usuarios WHERE correo = '$usuario[correo]' ";
 $result = $conexion->query($buscarCorreo);
 $countCorreo = mysqli_num_rows($result);

 if ($countNombre >= 1) {
  echo "<br />". "Nombre de Usuario ya asignado, ingresa otro." . "<br />";
  echo "<a href='Vistas/resgistrar.php'>Por favor escoga otro Nombre</a>";
 }
 elseif($countCorreo >= 1){
  echo "<br />". "Correo ya registrado, ingresa otro." . "<br />";
  echo "<a href='Vistas/resgistrar.php'>Por favor escoga otro correo</a>";
 }
 
 else{

 $query = "INSERT INTO usuarios (nombre, correo, contrasena, perfil) VALUES ('$usuario[nombre]', '$usuario[correo]', '$usuario[contrasena]', '$usuario[perfil]')";

 if ($conexion->query($query) === TRUE) {
 // header('Location: http://localhost/Login/login.html');
 echo "<br />" . "<h1>" . "Gracias por registrarse!" . "</h1>";
 echo "<h3>" . "Bienvenido: " . $usuario['nombre'] . "</h3>" . "\n\n";
 echo "<h3>" . "Iniciar Sesion: " . "<a href='Vistas/login.php'>Login</a>" . "</h3>"; 
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>
