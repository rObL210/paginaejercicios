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
<form action="eje5.php" method="get">
        <label> Distancia en kilometros</label>
    <input type="number" name="num1">
    <br>
    <label>velocidad en en kilómetros por hora </label>
    <input type="number" name="num2">
    <br>
    <input type="submit" value="Mostrar" name="boton">  <br>
    <?php
    if(isset($_GET['boton'])){
    $a=$_GET['num1'];
    $b=$_GET['num2'];  
// Calcular el tiempo en horas
$tiempo = $a / $b;
// Mostrar el resultado
echo "El tiempo que tardarás en llegar es de " .round( $tiempo ). " horas.";

    

    }
?>
</form>
</h2>
</div>
</body>
</html>