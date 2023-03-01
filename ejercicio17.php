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
    <form action="ejercicio17.php" method="post">
    <br>
    <label >Costo del producto :
        <input type="text" name="consumo">
    </label>
    <br>
    <input type="submit" value="mostrar" name="boton">
    </form>
    <?php
    if(isset($_POST["boton"])){ 
    $p=$_POST["consumo"]*0.19;
    echo"Su compra sin descuento es de ". round($p);
    if ($consumo>=100000){
    } else ($j=$p-2000);{
    echo"Su compra con descuento es de ". round($j);
}
    }
    ?>
    </div>
</body>
</html>