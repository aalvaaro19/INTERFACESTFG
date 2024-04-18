<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apuntarse</title>
    <link rel="stylesheet" href="estilos/apuntarse.css">
    
</head>

<body>
    <?php
        include "INCLUDES/header.php";
    ?>
    <div id="filtrador">
        <ul>
            <li>
                <label>
                    Menor:
                    <select id="select2">
                        <option value="0"></option>
                        <option value="1">Menor ejemplo</option>
                    </select>
                </label>
            </li>
        </ul>
        <ul>
            <li id="colegios2">
                <label>
                    Colegio:
                    <select id="select">
                        <option value="0"></option>
                        <option value="CIUDAD DE COLUMBIA">CIUDAD DE COLUMBIA</option>
                        <option value="CARMEN HERNÁNDEZ GUARCH">CARMEN HERNÁNDEZ GUARCH</option>
                        <option value="ENRIQUE TIERNO GALVÁN">ENRIQUE TIERNO GALVÁN</option>
                        <option value="CIUDAD DE NEJAPA">CIUDAD DE NEJAPA</option>
                        <option value="ALDEBARÁN">ALDEBARÁN</option>
                    </select>
                </label>
            </li>
        </ul>
        <ul>
            <li>
                <label>
                    Actividad:
                    <select id="select">
                        <option value="0"></option>
                        <option value="Fútbol">Fútbol</option>
                        <option value="Baloncesto">Baloncesto</option>
                        <option value="Tenis">Tenis</option>
                        <option value="Futbol sala">Futbol sala</option>
                        <option value="Ajedrez">Ajedrez</option>
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
    <?php
        include "INCLUDES/footer.php";
    ?>
    <script src="scripts/apuntarse.js"></script>
    <script src="scripts/portada1.js"></script>
    <script src="scripts/sesion.js"></script>
</body>

</html>