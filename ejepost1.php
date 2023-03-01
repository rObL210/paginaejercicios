<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ejercicios/css/principal2.css">
    <h2><a href="../ejercicios/index.html">Menu</a></h2>
    <title>web</title>
</head>
<body>
    <div class="conta">
        <h2>
<form action="ejepost1.php" method="post">
    <label> ingrese la nota</label>
    <input type="number" name="num1"><br>
    <input type="submit" value="Mostrar" name="boton">  <br>;
    <?php
    if(isset($_POST['boton'])){
    $p=$_POST['num1'];
    if ($p>=7and $p<11 ){
    echo "Aprobado";
    } if ($p<=6 )
    echo "Desaprobado";
}
?>
</form>
</h2>
</div>
</body>
</html>