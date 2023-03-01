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
<form action="ejercicio2.php" method="post">
   <h1>Bienvenido</h1>
        <h4>
            <label>Nombre:</label>
            <input type="text" name="txtnombre"><br>
           
            <label >Apellido:</label>
            <input type="text" name="txtapellido"><br>
            <label >Edad:</label>
            <input type="text" name="txtedad"> <br>
            <label >Telefono:</label>
            <input type="text" name="txttele"> <br>
            <input type="submit" value="Mostrar" name="boton">  <br>
        </h4>
    </form>
    <?php
    if(isset($_POST["boton"])){
        $j=$_POST["txtnombre"];
        $k=$_POST["txtapellido"];
        $l=$_POST["txtedad"];
        $p=$_POST["txttele"];

        echo  $j." ".$k." ".$l." ".$p;
    }
    ?>
    </div>
</body>
</html>