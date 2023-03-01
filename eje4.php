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
        <h1>Ejercico 4 GET</h1>
<form action="eje4.php" method="get">
    <h2>
        <label> longitud 1</label>
    <input type="number" name="num1">
    <br>
    <label>longitud 2 </label>
    <input type="number" name="num2">
    <br>
    <input type="submit" value="Mostrar" name="boton">  <br>
    <?php
    if(isset($_GET['boton'])){
    $a=$_GET['num1'];
    $b=$_GET['num2'];
    $c = sqrt(pow($a, 2) + pow($b, 2)); // cálculo de la hipotenusa
    
    echo "La hipotenusa del triángulo rectángulo es: " . $c;
    
}
?>
</h2>
</form>
</div>
</body>
</html>