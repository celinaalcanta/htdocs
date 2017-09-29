<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de sesión</title>
</head>
   <link rel="stylesheet" href="../../public/css/bootstrap.css">
   <link rel="stylesheet" href="../../public/css/bootstrap-theme.css">
<body>
<div style ="width:300px;">
    <form action="#" id="loginform" method="post"
>      <fieldset >
         <legend>Login Form</legend>
        <!-- div>label[for=usuario]{usuario:}+input[type=text name=usuario id=usuario]
       -->
   
         <label for="usuario">usuario:</label>
         <imput type="text" name ="usuario" id="usuario">

         <!-- div> label [for=passwd] {contraseña:}+input[type=password name=passwd id=passwd] -->
         <div>
           <label for="passwd"> contraseña:</label>
           <input type="pasword" name="passwd" id="passwd">
         </div>
         <div><a href="remember.php">¿Olvidaste tu contraseña?</a></div>
         <button type="submit">Iniciar seción></button>
         <hr>
         ¿No tienes una cuenta?
         <a href="signup.pgp">Registrate aquí</a>
         </fieldset>
         </div>
         </div>
</body>
</html>