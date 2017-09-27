<?php
require_once '../src/app/db/mysql.php';
require_once '.../src/models/user.php';
use models\user;
if(isset($_POST['usuario'])&& isset($_POST['passwd'])){
    $usuario =$_POST['usuario'];
    $passwd =$_POST['passwd'];
    $usuario =$_POST['passwd'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
   if isset($usuario) && $usuario) {
       echo "Usuario $usuario ->name puede iniciar seción correctamente";
   }
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