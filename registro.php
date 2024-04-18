<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="estilos/registro.css">
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <h2 class="active">Registro</h2>
            <form action="registro" method="post">
            <input type="text" id="nombreuser" class="fadeIn second" name="NU" placeholder="Nombre de usuario" minlength="5" maxlength="40" required>
            <input type="text" id="nombre" class="fadeIn third" name="NOM" placeholder="Nombre completo" minlength="5" maxlength="45" required>
            <input type="text" id="telefono" class="fadeIn third" name="TEL" placeholder="Teléfono" minlength="9" maxlength="9" required>
            <input type="text" id="direccion" class="fadeIn third" name="DIR" placeholder="Dirección" minlength="5" maxlength="45" required>
            <input type="text" id="cp" class="fadeIn third" name="CP" placeholder="Código Postal" minlength="5" maxlength="5" required>
            <input type="text" id="cp" class="fadeIn third" name="CP" placeholder="Correo electrónico" minlength="5" maxlength="5" required>
            <input type="text" id="pass1" class="fadeIn third" name="PASS1" placeholder="Contraseña" minlength="5" maxlength="16" required>
            <input type="text" id="pass2" class="fadeIn third" name="PASS2" placeholder="Repite Contraseña"  minlength="5" maxlength="16" required>
            <input type="submit" class="fadeIn fourth" value="Iniciar sesión" id="enviar"  disabled>
            </form>
            
        </div>
    </div>
    <script src="scripts/registro.js"></script>
</body>
</html>