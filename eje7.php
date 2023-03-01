<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ejercicios/css/get.css">
    <h2><a href="../ejercicios/index.html">Menu</a></h2>
    <title>web</title>
</head>

<body>
    <div class="conta">
        <h2>
            <form action="eje7.php" method="get">
                <label> ingrese su edad </label>
                <input type="number" name="num">
                <input type="submit" value="Mostrar" name="boton"> <br>
                <?php
                if (isset($_GET['boton'])) {
                    $p = $_GET['num'];
                    if ($p <= 12) {
                        echo "La edad corresponde a un niño";
                    }
                    if ($p >= 13 and $p < 18) {
                        echo "La edad corresponde a un adolecente";
                    }
                    if ($p >= 18 and $p <= 58) {
                        echo "La edad corresponde a un adulto";
                    }
                    if ($p >= 59) {
                        echo "La edad corresponde a un adulto mayor";
                    }
                }


                ?>
            </form>
        </h2>
    </div>
</body>

</html>