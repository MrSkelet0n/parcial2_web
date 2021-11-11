<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <title>Practica 2</title>
    <style>
        body {
            height: 100%;
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
    function color_rand()
    {
        return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }
    $color = color_rand();
    echo "Hexadecimal generado = " . $color;
    echo "<div style='color:" . $color . ";'> Color Generado </div>";

    echo "<h1 style='color:" . $color . ";'>Titulo de la pagina </h1>";

    ?>

    <span id="alumno">
        CETIS 107 - Rodríguez Murrieta Kevin Vladimir - 5AVP
    </span>
</body>

</html>