<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ejercicios/css/principal.css">
    <h2><a href="../ejercicios/index.html">Menu</a></h2>
    <title>web</title>
</head>
<body>
<div class="cont">
<h1>Bienvenido</h1>
    <form action="ejercicio18.php" method="post">
<label >Consumo en el mes :
        <input type="text" name="consumo">
        <br>
        <br>
        <br>
    </label>
    <input type="submit" value="mostrar" name="boton">
<?php
 if(isset($_POST["boton"])){ 
    $p=$_POST["consumo"];
    if($p>200000){
        $s=$p+5000;
        echo "El valor a pagar es ".$s;
        }
        if($p<180000){
            $j=$p-40000;
            echo "El valor a pagar es ".$j;
        }
        if($p<120000){
        $m=$p-20000;
        echo "El valor a pagar es ".$m;
    }

    }
?>

    </form>
    </div>
</body>
</html>
