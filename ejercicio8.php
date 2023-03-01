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
    <form action="ejercicio8.php" method="post">
    <label>  Ingrese el primer numero</label> 
            <input type="number" name="num1"><br >
     <label>  Ingrese el segundo numero</label> 
            <input type="number" name="num2"><br >
    <input type="submit" value="Mostrar" name="boton">  <br>
    <?php

if(isset($_POST["boton"])){ 
    $a=$_POST["num1"];
    $b=$_POST["num2"];
 if ($a>$b) {
  echo "el numero mayor es " .$a;
 } else 
 echo "el numero mayor es " .$b;


}
    ?>
    </form>
    </div>
</body>
</html>