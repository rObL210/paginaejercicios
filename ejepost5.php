<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ejercicios/css/principal2.css">
    <h2><a href="../ejercicios/index.html">Menu</a></h2>
    <title>web</title>
</head>

<body>
    <div class="conta">
        <h2>
            <form method="post" action="ejepost5|.php">
                <label>Nota 1:</label>
                <input type="number" name="nota1"><br>
                <label>Nota 2:</label>
                <input type="number" name="nota2"><br>
                <label>Nota 3:</label>
                <input type="number" name="nota3"><br>
                <label>Nota 4:</label>
                <input type="number" name="nota4"><br>
                <label>Nota 5:</label>
                <input type="number" name="nota5"><br>
                <label>Nota 6:</label>
                <input type="number" name="nota6"><br>
                <br><input type="submit" name="boton" value="Enviar"><br>
            </form>

            <?php
            if (isset($_POST['boton'])) {

                $notas = array(
                    $_POST["nota1"],
                    $_POST["nota2"],
                    $_POST["nota3"],
                    $_POST["nota4"],
                    $_POST["nota5"],
                    $_POST["nota6"]
                );
                $aprobadas = 0;
                $desaprobadas = 0;
                $sum_aprobadas = 0;
                $sum_desaprobadas = 0;

                foreach ($notas as $nota) {
                    if ($nota >= 30) {
                        $aprobadas++;
                        $sum_aprobadas += $nota;
                    } else {
                        $desaprobadas++;
                        $sum_desaprobadas += $nota;
                    }
                }

                $prom_aprobadas = ($aprobadas > 0) ? $sum_aprobadas / $aprobadas : 0;
                $prom_desaprobadas = ($desaprobadas > 0) ? $sum_desaprobadas / $desaprobadas : 0;


                echo "<h2>Resultados:</h2>";
                echo "Promedio de notas aprobadas es " . number_format($prom_aprobadas, 2) . "<br>";
                echo "Promedio de notas desaprobadas es" . number_format($prom_desaprobadas, 2) . "<br>";
            }
            ?>
            </form>
        </h2>
    </div>

</body>

</html>