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
        <h1>Bienvenido</h1><br>
<form action="ejercicio7.php" method="post">
        <label> ingrese un numero</label>
    <input type="number" name="num">
    <br>
    <input type="submit" value="Mostrar" name="boton">  <br>
    <?php
    if(isset($_POST['boton'])){
        $p=$_POST['num'];
        if ($p%2==0){
            echo "el $p es par";
        }else{
            echo "el $p es impar";
        }
        }
       
    ?>
     </form>
     </div>
</body>
</html>