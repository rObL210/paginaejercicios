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
            <form action="ejepost3.php" method="post">
                <label>Tipo de piliza </label>
                <select name="opt">
                    <option value="1">A</option>
                    <option value="2">B</option>
                </select>
                <br>
                <label>tiene por hábito beber alcohol</label>
                <select name="opt2">
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
                <br>
                <label> usa lentes </label>
                <select name="opt3">
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
                <br>
                <label> padece alguna enfermedad como deficiencia cardiaca o diabetes </label>
                <select name="opt4">
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
                <br>
                <label> Es mayor de 40 años </label>
                <select name="opt5">
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
                <br>
                <input type="submit" value="Mostrar" name="boton"> <br>
                <?php

                if (isset($_POST["boton"])) {
                    $poliza = $_POST["opt"];
                    $alcohol = $_POST["opt2"];
                    $lentes = $_POST["opt3"];
                    $enfermedad = $_POST["opt4"];
                    $edad = $_POST["opt5"];
                    if ($poliza == 1) {
                        $p = 1200000;
                    }
                    if ($alcohol == 1) {
                        $a = ($p * 0.10);
                    }
                    if ($lentes == 1) {
                        $l = ($a * 0.5);
                    }
                    if ($enfermedad == 1 and $edad == 1) {
                        $e = ($l * 0.20);
                    } else {
                        $e = ($l * 0.10);
                    }
                    $j = ($a + $l + $e);
                    $r = $j + $p;
                    echo "El valor de la poliza A es de " . round($r);
                    if ($poliza == 2) {
                        $h = 950000;
                    }
                    if ($alcohol == 1) {
                        $al = ($h * 0.10);
                    }
                    if ($lentes == 1) {
                        $lo = ($al * 0.5);
                    }
                    if ($enfermedad == 1 and $edad == 1) {
                        $g = ($lo * 0.20);
                    } else {
                        $g = ($lo * 0.10);
                    }
                    $z = ($al + $lo + $g);
                    $o = $z + $h;
                    echo "El valor de la poliza B es de " . round($o);
                }

                ?>
            </form>
        </h2>
    </div>
</body>

</html>