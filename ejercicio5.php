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
    <form action="ejercicio5.php" method="post">
        <label> ingrese la base del triangulo</label>
    <input type="number" name="num1">
    <br>
    <label>ingrese la altura del triangulo </label>
    <input type="number" name="num2">
    <br>
    <input type="submit" value="Mostrar" name="boton">  <br>
    <?php
    if(isset($_POST['boton'])){
    $p=$_POST['num1'];
    $m=$_POST['num2'];
    $a=($m*$p)/2;
    echo "El resultado es " .$a ; 
    }
    ?>
    </form>
    </div>
</body>
</html>