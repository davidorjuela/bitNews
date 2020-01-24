
<?php
session_start();
?>

<?php

require('../conexion.php');

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
 
$sql = "SELECT * FROM usuarios WHERE correo = '$correo'";


$result = $conexion->query($sql);


if ($result->num_rows > 0) {     }
	
 
  $row = $result->fetch_array(MYSQLI_ASSOC);
 // if (password_verify($password, $row['password'])) { 
if ($contrasena==$row['contrasena']) { 

 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $row['nombre'];
    $_SESSION['user_ID'] = $row['id'];
    $_SESSION['perfil'] = $row['perfil'];

    echo "Bienvenido! " . $_SESSION['username'];
    header('Location: ./../index.php');//redirecciona a la pagina del usuario

 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='login.html'>Volver a Intentarlo</a>";
 }
 mysqli_close($conexion); 
 ?>