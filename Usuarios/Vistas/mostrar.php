<?php 
    require('../../conexion.php');

	$idUsuario = 0;
    $sql = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conexion, $sql);
    $usuario = mysqli_fetch_all($resultado); 

    #require('index.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrar Usuarios</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
</head>
<body>
	<div class="container">
		<div class="content">
			<h2>Lista de Usuarios</h2>
            <a href="../../index.php">Volver</a>
			<hr>
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                    <th>ID</th>			
					<th>Nombre</th>
					<th>Correo</th>
					<th>Contraseña</th>
                    <th>Perfil</th>
				</tr>
				<?php

				if(mysqli_num_rows($resultado) == 0)
				{
					echo '<tr><td colspan="8">Tabla usuario sin DATOS, verifique.</td></tr>';
				} else
				 	{
                    foreach($resultado as $row)
					{
						echo '
						<tr>
							<td>'.$row['id'].'</td>
                            <td>'.$row['nombre'].'</td>
							<td>'.$row['correo'].'</td>
                            <td>'.$row['contrasena'].'</td>
                            <td>'.$row['perfil'].'</td>
							<td>
							<a href="editarUsuario.php?id='.$row['id'].'" title="enviarDatosRow" 
								class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>  - 
								<a href="../eliminar.php?id='.$row['id'].'" title="Eliminar" 
								onclick="return confirm(\'Esta seguro de borrar los datos '.$row['nombre'].'?\')" 
								class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                         </tr>
                            ';
					}
				}
				?>
			</table>
			</div>
			<br>
			<h2>Agregar o Modificar Usuarios</h2>
			<hr>
			<table class="table table-striped table-hover">
			<?php if($id == $row['id']){?>
				<form name="tablaEditar" action="../modificar.php" method="POST">
					<input class="nombre" value="$row['nombre']" pattern="[a-zA-Z]*" type="text" name="nombre" placeholder="Nombre">
					<input class="correo" value="$row['correo']" type="email" name="correo" placeholder="Correo">
					<input class="password" value="$row['password']" type="text" name="password" placeholder="Password">
					<input class="perfil" value="$row['perfil']" pattern="[a-zA-Z]*" type="text" name="perfil" placeholder="Perfil">
                    <button style="margin-left:10px;" type="submit" name="agregar" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></button> -
					<button href="Usuario.php?idUsuario='.$row['idUsuario'].'" title="llenarForm" class="btn btn-primary btn-sm"><i class="fas fa-save"></i></button>
				</form>
			<?php  }else{?>
				<form name="tablaEditar" action="../registrar.php" method="POST">
				<input class="nombre" pattern="[a-zA-Z]*" type="text" name="user[nombre]" placeholder="Nombre">
				<input class="correo" type="email" name="user[correo]" placeholder="correo">
				<input class="password" type="text" name="user[contrasena]" placeholder="Password">
                <input class="perfil" pattern="[a-zA-Z]*" type="text" name="user[perfil]" placeholder="Perfil">
				<button style="margin-left:10px;" type="submit" name="agregar" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></button> -
				<button href="Usuario.php?idUsuario='.$row['idUsuario'].'" title="llenarForm" class="btn btn-primary btn-sm"><i class="fas fa-save"></i></button>
			</form>
			<?php }?>
			</table>
			<hr>

		</div>
	</div>
</body>
</html>