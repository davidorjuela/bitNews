<!-- 
Creado por Luisetfree & tecnosetfree
Web: http://luisetfree.over-blog.es
Facebook:https://www.facebook.com/tecnosetfree/
Twitter: @tecnosetfree
Apoyanos con tus visitas y comentarios en nuestras redes sociales para seguir avanzando y traer contenido de calidad.

 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registro de usuario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
</head>
<body style="background-color:#0A2F37;">

<div class="container" style="background-color:#0A2F37;  margin-left:30%;">
<img src="../imagenes/logoc.png" alt="logo" style="width: 20%;">
<div style="margin:-5% 0 0 0">
  <h2 style="color:white; font-family:'Open Sans Condensed', sans-serif; font-size:65px;">Crea una cuenta</h2>
</div>
  <form class="form-horizontal" action="./../registrar.php" method="post">

    <div class="form-group" style="margin-top:7%;">
      <label class="control-label col-sm-2" for="email" style="    color:rgba(241, 235, 235, 0.575) ; font-size:15px;">Usuario</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" maxlength="20" placeholder="Ingresa tu usuario" name="user[nombre]" required style="background-color:#0A2F37;
        border-top:transparent; border-right:transparent; border-left:transparent; border-buttom:5px solid #0A2F37;margin-top:2%; width:60%; color:white; font-size:15px; ">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email" style="    color:rgba(241, 235, 235, 0.575) ; font-size:15px;">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" maxlength="50" id="email" placeholder="Enter email" name="user[correo]" style="background-color:transparent;
        border-top:transparent; border-right:transparent; border-left:transparent; border-buttom:5px solid #0A2F37;margin-top:2%; width:60%; color:white; font-size:15px; ">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" style="    color:rgba(241, 235, 235, 0.575) ; font-size:15px;">Contraseña:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" maxlength="30" id="pwd" placeholder="Ingresa una Contraseña" name="user[contrasena]" required style="background-color:#0A2F37;
        border-top:transparent; border-right:transparent; border-left:transparent; border-buttom:5px solid #0A2F37;margin-top:2%; width:60%; color:white; font-size:15px; ">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label style="color:white;"><input type="checkbox" name="remember" > Recordarme</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default"  class="btn btn-outline-info" style="background-color:#6F9BAA;  width:8%; margin-top:5%;margin-left:2%;">Crear</button>
        <button type="button" class="btn btn-default" onclick="location.href='login.php'" class="btn btn-outline-info" style="background-color:#6F9BAA; width:8%; margin-top:5%;margin-left:2%;">Login</button>
      </div>
    </div>
   
  </form>

  
</div>

</body>
</html>
