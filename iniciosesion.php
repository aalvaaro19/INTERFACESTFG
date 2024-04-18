<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="estilos/iniciosesion.css">
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <h2 class="active">Iniciar sesión</h2>
            <form action="Iniciar_sesion" method="post">
            <input type="text" id="login" class="fadeIn second" name="user" placeholder="Usuario">
            <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Contraseña" >
            <input type="submit" id="envio" class="fadeIn fourth" value="Iniciar sesión">
            </form>
            <div id="formFooter">
            <a class="underlineHover" href="#">¿Has olvidado tu contraseña?</a>
            <a class="underlineHover" href="registro.php">¿No tienes cuenta?</a>
            </div>
        </div>
    </div>
    
</body>
</html>