<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/principal.css">
    <h2><a href="../ejercicios/index.html">Menu</a></h2>
    <title>web</title>
</head>

<body>
    <div class="cont">
        <h1>Bienvenido</h1>
    <form action="ejercicio11.php" method="post">
        <label> Inversion 1</label>
        <input type="number" name="in1"><br>
        <label> Inversion 2</label>
        <input type="number" name="in2"><br>
        <label> Inversion 3</label>
        <input type="number" name="in3"><br>
        <input type="submit" value="Mostrar" name="boton"> <br>
        <?php
        if (isset($_POST["boton"])) {
            $a = $_POST["in1"];
            $b = $_POST["in2"];
            $c = $_POST["in3"];
            $s = ($a + $b + $c);
            $j = (($a / $s) * 100);
            $k = (($b / $s) * 100);
            $l = (($c / $s) * 100);
            }
            ?>
            <?php
            echo "la inversion 1 es de ".round($j)."%";
            ?>
            <br>
            <?php
            echo "la inversion 2 es de " .round($k)."%";
            ?>
            <br>
            <?php
            echo "la inversion 3 es de " .round($l)."%";
            ?>
    </form>
    </div>
</body>

</html>