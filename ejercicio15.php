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
    <form action="ejercicio15.php" method="post">
    <br>
    <label >Distancia a recorrer :
        <input type="text" name="dis">
    </label>
    <br>
    <input type="submit" value="mostrar" name="boton">
    </form>
    <?php
    if(isset($_POST["boton"])){ 
    $p=$_POST["dis"]/80;
    echo"logalones a gastar es de ". round($p);

    }
    ?>
    </div>
</body>
</html>