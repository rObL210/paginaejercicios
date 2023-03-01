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
<form action="ejepost4.php" method="post">
<label>  Ingrese su edad </label> 
<input type="number" name="edad"><br >
<label>  ingrese su genero (m)o (f)</label> 
<input type="text" name="genero"><br >
<input type="submit" value="Mostrar" name="boton">  <br>
    <?php
    if(isset($_POST["boton"])){ 
        $edad=$_POST['edad'];
        $genero=$_POST['genero'];
if ($edad >= 70) {
    $tipoVacuna = 'C';
} elseif ($edad >= 16 and $edad<=69 && $genero == 'f') {
    $tipoVacuna = 'B';
} elseif ($edad >= 16 && $genero == 'M') {
    $tipoVacuna = 'A';
} else {
    $tipoVacuna = 'A';
}

echo "La persona de $edad años y género $genero debe recibir la vacuna tipo $tipoVacuna.";
}
?>
</form>
</h2>
</div>
</body>
</html>