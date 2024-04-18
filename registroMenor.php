<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="estilos/registro.css">
    <link rel="stylesheet" href="estilos/nuevaPortada.css">
    <link rel="icon" href="imagenes/logo_RIE.png">
</head>

<body>
<?php
    include "INCLUDES/header.php";
?>
    <section>


        <div class="wrapper fadeInDown">
            <div id="formContent">
                <h2 class="active">Registro del menor</h2>
                <form action="Sv_menor" method="post">
                    <input type="text" id="login" class="fadeIn second" name="nombre"
                        placeholder="Nombre Completo del menor" required>
                    <select name="curso" id="login">
                        <option value="0"></option>
                        <option value="1 Infantil">1º de Infantil</option>
                        <option value="2 Infantil">2º de Infantil</option>
                        <option value="3 Infantil">3º de Infantil</option>
                        <option value="1 Primaria">1º de Primaria</option>
                        <option value="2 Primaria">2º de Primaria</option>
                        <option value="3 Primaria">3º de Primaria</option>
                        <option value="4 Primaria">4º de Primaria</option>
                        <option value="5 Primaria">5º de Primaria</option>
                        <option value="6 Primaria">6º de Primaria</option>
                        <option value="1º ESO">1º ESO</option>
                        <option value="2º ESO">2º ESO</option>
                    </select>
                    <input type="submit" class="fadeIn fourth" value="Enviar" id="enviar" href="Sv_apuntarse$">
                </form>
            </div>
        </div>
    </section>
    <script src="scripts/portada1.js"></script>
    <script src="scripts/sesion.js"></script>
</body>

</html>