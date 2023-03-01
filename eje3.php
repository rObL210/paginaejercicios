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
    <h1>Ejercicio 3 GET</h1>
<form action="eje3.php" method="get">
    <h2>
        <label> ingrese la nota del examen 1</label>
    <input type="number" name="num1">
    <br>
    <label>ingrese la nota del examen 2</label>
    <input type="number" name="num2">
    <br>
        <label> ingrese la nota del examen 3</label>
    <input type="number" name="num3">
    <br>
    <input type="submit" value="Mostrar" name="boton">  <br>
    <?php
    if(isset($_GET['boton'])){
    $a=$_GET['num1'];
    $b=$_GET['num2'];
    $c=$_GET['num3'];
// Calcular las calificaciones ponderadas
$pond= 25;
$pond2 = 25;
$pond3 = 50;
$not1= ($pond * $a)/ 100;
$not2= ($pond2 * $b )/ 100;
$not3= ($pond3 * $c )/ 100;
// Calcular el promedio ponderado
$promedio = ($not1+ $not2 + $not3) / 100;
echo "El promedio ponderado del alumno es: " . $promedio;
}
?>
</h2>
</form>  
</div>
</body>
</html>