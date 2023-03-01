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
<form action="ejercicio3.php" method="post">

        <img src="../ejercicios/img/eje1.jpg" alt="">
        <h1>Bienvenido </h1>
        <h2>
            <label>Nombre:</label> 
            <input type="text" name="txtnombre"><br >
            <br>
            <label >Apellido:</label>
            <input type="text" name="txtapellido"><br>
            <br>
            <label >Edad:</label>
            <input type="text" name="txtedad"> <br>
            <br>
            <label >Telefono:</label>
            <input type="text" name="txttele"> <br>
            <br>
            <input type="submit" value="Mostrar" name="boton">  <br>
        </h2>
    </form>
    <?php
    if(isset($_POST["boton"])){ //aca se valida toda la infomacion anterior 
        $a=$_POST["txtnombre"];
        $b=$_POST["txtapellido"];
        $c=$_POST["txtedad"];
        $d=$_POST["txttele"];

        echo $a." ".$b." ".$c." ".$d;/*Aca se muestran los resultados */
    }
    ?> 
    </div>
</body>
</html>









