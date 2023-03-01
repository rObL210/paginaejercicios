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
    <form action="ejercicio19.php" method="post">
    <label >ingrese un numero :
        <input type="text" name="num">
        <br>
        <br>
    </label>
    <input type="submit" value="mostrar" name="boton">
    <br>
<?php
 if(isset($_POST["boton"])){ 
    $num=$_POST["num"];
    
// Ejemplo ciclo while
while ($num <= 10) {
    echo $num . ' ';
    $num++;
}

echo "<br>";

// Ejemplo ciclo do-while
do {
    echo $num . ' ';
    $num++;
} while ($num <= 10);
}
?>
</form>
</div>
</body>
</html>