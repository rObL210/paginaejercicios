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
  <form action="ejercicio9.php" method="post">
    <label>  Ingrese la nota 1</label> 
            <input type="number" name="not1"><br >
    <label>  Ingrese la nota 2</label> 
            <input type="number" name="not2"><br >
    <label>  Ingrese la nota 3</label> 
            <input type="number" name="not3"><br >
     <label>  Ingrese la nota 4</label> 
            <input type="number" name="not4"><br >
    <label>  Ingrese la nota 5</label> 
            <input type="number" name="not5"><br >
    <input type="submit" value="Mostrar" name="boton">  <br>
<?php
if(isset($_POST["boton"])){ 
    $a=$_POST["not1"];
    $b=$_POST["not2"];
    $c=$_POST["not3"];
    $d=$_POST["not4"];
    $e=$_POST["not5"];
    $s= ($a+$b+$c+$d+$e);
    $p=$s/5;
    if ($p>2.9){
    echo " felicidades su promedio es " .$p;
    } else{
    echo "su promedio es " .$p; 
  }
}

?>
 </form>
 </div>
</body>
</html>