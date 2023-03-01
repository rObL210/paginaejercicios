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
    <form action="ejercicio6.php" method="post">
    <label> ingrese el primer numero</label>
    <input type="number" name="num1">
    <br>
    <label> ingrese el segundo numero</label>
    <input type="number" name="num2"><br>
    <select name="opt">
                <option >suma</option>
                <option >resta</option>
                <option >multiplicacion</option>
                <option >division</option>
            </select>
    <input type="submit" value="Mostrar" name="boton">  <br>;
    <?php
    if(isset($_POST['boton'])){
    $p=$_POST['num1'];
    $m=$_POST['num2'];
    if ($opt=1){
    $s=$p+$m;
    echo " La suma es".$s ; 
    }
    }
    if(isset($_POST['boton'])){
        $p=$_POST['num1'];
        $m=$_POST['num2'];
        if ($opt=2) {
        $s=$p-$m;
        echo " La resta es".$s;
        }
    }
    if(isset($_POST['boton'])){
        $p=$_POST['num1'];
        $m=$_POST['num2'];
        if ($opt=3) {
        $s=$p*$m;
        echo " La multiplicacion es".$s ;
        }
        }
        if(isset($_POST['boton'])){
            $p=$_POST['num1'];
            $m=$_POST['num2'];
            if ($optn=4) 
            $s=$p/$m;
            echo " La division es".$s ; 
        }
   
    ?>
    </form>
    </div>
</body>
</html>