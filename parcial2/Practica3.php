<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practica 3</title>
        <style>
                body {
                        height: 100%;
                        text-align: center;
                }

                input {
                        text-align: center;
                }

                #alumno {
                        color: white;
                        font-weight: bold;
                        background: black;
                        text-align: center;
                        position: fixed;
                        left: 0;
                        bottom: 0;
                        width: 100%;
                        height: 30px;
                }
        </style>
</head>

<body>
        <?php
        if (isset($_GET['nombre']) && isset($_GET['edad']) && isset($_GET['correo']) && isset($_GET['sexo']) && isset($_GET['areas'])) {
                echo "<b>Nombre:</b> <br>" . $_GET['nombre'] . "<br>";
                echo "<b>Edad: </b> <br>" . $_GET['edad'] . "<br>";
                echo "<b>Correo: </b> <br>" . $_GET['correo'] . "<br>";
                echo "<b>Sexo: </b> <br>" . $_GET['sexo'] . "<br>";
                echo "<b>Area de Preferencias</b><br>";
                for ($i = 0; $i < count($_GET['areas']); $i++) {
                        if ($i == count($_GET['areas']) - 1) {
                                echo $_GET['areas'][$i] . '.';
                        } else {
                                echo $_GET['areas'][$i] . ', ';
                        }
                }
        } else {
        ?>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="GET">
                        <h1>Formulario de registro de clientes</h1>
                        <b>Nombre</b><br>
                        <input type="text" name="nombre" placeholder="Nombre del Cliente" required style="width: 30%;">
                        <br><br>
                        <b>Edad</b><br>
                        <input type="number" name="edad" placeholder="Edad" required>
                        <br><br>
                        <b>Correo</b><br>
                        <input type="email" name="correo" placeholder="Correo" required style="width: 30%;">
                        <br><br>
                        <b>Sexo</b><br>
                        <input type="radio" name="sexo" value="Femenino"><label>Femenino</label> <br>
                        <input type="radio" name="sexo" value="Masculino" required><label>Masculino</label> <br>
                        <br><br>
                        <b>Areas de Preferencias</b><br>
                        <input type="checkbox" name="areas[]" value="Tecnologia"> Tecnologia <br>
                        <input type="checkbox" name="areas[]" value="Belleza"> Belleza <br>
                        <input type="checkbox" name="areas[]" value="Automoviles"> Automoviles <br>
                        <input type="checkbox" name="areas[]" value="Salud"> Salud <br>

                        <input type="submit" value="Enviar Examen">
                </form>
        <?php
        }
        ?>
        <span id="alumno">
                CETIS 107 - Rodríguez Murrieta Kevin Vladimir - 5AVP
        </span>
</body>

</html>