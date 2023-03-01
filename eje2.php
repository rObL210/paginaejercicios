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
<form action="eje2.php" method="get">
    <label>Ingrese el area a pintar en metros </label>
    <input type="number" name="num"><br>
    <input type="submit" value="Mostrar" name="boton">  <br>;
    <?php
    if(isset($_GET['boton'])){
    $p=$_GET['num'];
    $j=($p*$p);
    $m=$j*6000;
    echo "  El valor a pagar es de ".$m; 
}
?>
</form>
</h2>
</div>
</body>
</html>