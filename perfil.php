<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de usuario</title>
    <link rel="stylesheet" href="estilos/perfil.css">
    <link rel="icon" href="imagenes/logo_RIE.png">
</head>
<body>
    <?php
        include_once 'INCLUDES/header.php';
    ?>
    <section>
        <div class="menuNav">
            <button id="listaActividades">Lista de mis actividades</button>
            <button id="editarPerfil">Editar perfil</button>
        </div>

        <div id="listarActividades" style="display: none;">
            <div id="filtrador">
                <ul>
                    <li id="colegios2">
                        <label>
                            Menor:
                            <select id="select">
                                <option value="0"></option>
                                <option value="1">Menor 1</option>
                                <option value="2">Menor 2</option>
                            </select>
                        </label>
                    </li>
                </ul>
            </div>
            <div id="colegios">
                <div id="individual">
                    <a href="#">
                        <h2>Fútbol sala Carmen Hernandez</h2>
                        <p id="centrado">Lunes de 17:00 a 18:00</p>
                        <img src="imagenes/CarmenHernandez.jpg">
                        <form action="" method="post" id="mi_form">
                            <label class="switch">
                                <input type="checkbox" name="boton0" id="boton0">
                                <span class="slider"></span>
                            </label>
                            <input type="submit" value="APUNTARSE" id="env">
                        </form>
                    </a>
                </div>
                <div id="individual">
                    <a href="#">
                        <h2>Fútbol sala Enrique Tierno Galvan</h2>
                        <p id="centrado">Lunes de 18:00 a 19:00</p>
                        <img src="imagenes/Tierno_Galvan.jpg">
                        <form action="" method="post" id="mi_form">
                                <label class="switch">
                                    <input type="checkbox" name="boton0" id="boton0">
                                    <span class="slider"></span>
                                </label>
                            <input type="submit" value="APUNTARSE" id="env">
                        </form>
                    </a>
                </div>
                <div id="galvan">
                    <a href="#">
                        <h2>Fútbol sala Aldebarán</h2>
                        <p id="centrado">Lunes de 19:00 a 20:00</p>
                        <img src="imagenes/Aldebaran.png">
                        <form action="" method="post" id="mi_form">
                            <label class="switch">
                                <input type="checkbox" name="boton0" id="boton0">
                                <span class="slider"></span>
                            </label>
                            <input type="submit" value="APUNTARSE" id="env">
                        </form>
                    </a>
                </div>
            </div>
        </div>

        <div id="editaPerfil" style="display: none;">
            <div class="wrapper fadeInDown">
                <div id="formContent">
                    <h2 class="active">Mis datos</h2>
                    <form action="registro" method="post">
                    <input type="text" id="nombreuser" class="fadeIn second" name="NU" placeholder="Nombre de usuario" minlength="5" maxlength="40" required>
                    <input type="text" id="telefono" class="fadeIn third" name="TEL" placeholder="Teléfono" minlength="9" maxlength="9" required>
                    <input type="text" id="direccion" class="fadeIn third" name="DIR" placeholder="Dirección" minlength="5" maxlength="45" required>
                    <input type="text" id="cp" class="fadeIn third" name="CP" placeholder="Código Postal" minlength="5" maxlength="5" required>
                    <input type="text" id="cp" class="fadeIn third" name="CP" placeholder="Correo electrónico" minlength="5" maxlength="5" required>
                    <input type="submit" class="fadeIn fourth" value="Editar menores registrados" id="enviarMenoresRegistrados"  disabled>
                    <input type="submit" class="fadeIn fourth" value="Editar datos bancarios" id="enviarDatosBancarios"  disabled>
                    <input type="submit" class="fadeIn fourth" value="Enviar" id="enviar"  disabled>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <?php
    include_once 'INCLUDES/footerPerfil.php';
    ?>
    
    <script src="scripts/perfil.js"></script>
    <script src="scripts/portada1.js"></script>
    <script src="scripts/sesion.js"></script>
</body>
</html>