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
    <h1>Ejercicio 1 GET</h1>
       
<form action="eje1.php" method="get" >
<h2>
        <label> ingrese la distancia inicial</label>
    <input type="number" name="num1">
    <br>
    <label>ingrese la distancia final </label>
    <input type="number" name="num2">
    <br>
        <label> ingrese el tiempo inicial</label>
    <input type="number" name="num3">
    <br>
    <label>ingrese el tiempo final </label>
    <input type="number" name="num4">
    <input type="submit" value="Mostrar" name="boton">  <br>
    <?php
    if(isset($_GET['boton'])){
    $a=$_GET['num1'];
    $b=$_GET['num2'];
    $c=$_GET['num3'];
    $d=$_GET['num4'];
    $distancia =($b - $a ); // calcula la distancia recorrida
    $tiempo = ($d - $c) ;// calcula el tiempo transcurrido
    
    $velocidad = $distancia / $tiempo; // calcula la velocidad promedio
    
    echo "La velocidad promedio del objeto es de: " . round($velocidad); // muestra el resultado redondeado a 2 decimales

    }
    
    ?>
    </h2>
</form>
</div>
</body>
</html>