<!-- 
Creado por Luisetfree & tecnosetfree
Web: http://luisetfree.over-blog.es
Facebook:https://www.facebook.com/tecnosetfree/
Twitter: @tecnosetfree
Apoyanos con tus visitas y comentarios en nuestras redes sociales para seguir avanzando y traer contenido de calidad.

 -->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image: url("../Imagenes/fondo.png");  }

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;

}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: block; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;


}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 25%;
    height:75%; /* Could be more or less, depending on screen size */

}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Agregando efecto Zoom */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>



<div id="id01" class="modal">
  
  <form class="modal-content animate" action="./../login.php" method="post">
    <div class="imgcontainer">
    <a href="../../index.php"><span  class="close" title="Close Modal" style="margin-top:-21%; margin-right:-10%; position:absolute;">&times;</span></a>

      <!-- <img src="../Imagenes/avatar.png" alt="Avatar" class="avatar"> -->
      <img src="../imagenes/logo.png" alt="logo" style="width: 32%;  margin:0 0 -60% 0 ; z-index: 1; position: relative; " >

      <img src="../imagenes/fondo.jpeg" alt="fondo" style="width:100%; height:100%; clip-path: polygon(0 0, 100% 0, 100% 64%, 0 99%); margin-top:-15%; position:relative;" >
    </div>

    <div class="container">
      <label for="uname"><b>Usuario</b></label>
      <input type="text" placeholder="Ingresa tu e-mail" name="correo" required style="border-top:transparent; border-left:transparent; border-right:transparent; border-bottom:solid 2px rgba(13, 13, 14, 0.486);">

      <label for="psw"><b>Contraseña</b></label>
      <input type="password" placeholder="Ingresa tu Contraseña" name="contrasena" required style="border-top:transparent; border-left:transparent; border-right:transparent; border-bottom:solid 2px rgba(13, 13, 14, 0.486);">
        
      <button type="submit" style="background-color: #042444; margin-top:20px;" >Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Recordarme
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      
      <button type="button" onclick="location.href='registrar.php'" style="background-color: #042444;">Registrarse</button>
      <span class="psw"><a href="#" style="text-decoration:none;">Olvidé mi contraseña</a></span>
    </div>
  </form>
</div>

</body>
</html>
