<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h2><a href="../ejercicios/index.html">Menu</a></h2>
    <title>Document</title>
</head>

<body>
    <div class="conta">
        <h2>
            <h1>CALCULAR BECA </h1>
            <form method="POST" ACTION="ejepost6.php">
                <h4>ingrese su edad </h4>
                <input type="text" name="edad">
                <h4>ingrese su promedio </h4>
                <input type="text" name="promedio">
                <input type="submit" name="boton" value="Enviar"> <br><br>
            </form>
            <?php

            if (isset($_POST['boton'])) {
                $edad = $_POST['edad'];
                $promedio = $_POST['promedio'];

                if ($edad > 18) {

                    if ($promedio >= 9) {
                        $beca = 2000000;
                    } elseif ($promedio >= 7.5) {
                        $beca = 1000000;
                    } elseif ($promedio >= 6) {
                        $beca = 500000;
                    } else {
                        $beca = 0;

                        echo "Lo sentimos su promedio no es suficiente para la beca .";
                    }
                } else {

                    if ($promedio >= 9) {
                        $beca = 300000;
                    } elseif ($promedio >= 8) {
                        $beca = 200000;
                    } elseif ($promedio >= 6) {
                        $beca = 100000;
                    } else {
                        $beca = 0;

                        echo "Lo sentimos su promedio no es suficiente para la beca .";
                    }
                }


                if ($beca > 0) {
                    echo " Usted ha sido seleccionado para recibir una beca de $" . $beca . " mensuales.";
                }
            }
            ?>
        </h2>
    </div>
</body>

</html>