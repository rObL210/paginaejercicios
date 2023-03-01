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
    <form action="ejercicio13.php" method="post">
    <label> Ingrese su salario</label><br>
        <input type="number" name="salario"><br>
        <select name="opt">
        <option value="1">empleado</option>
        <option value="2">empleador</option><br>
        </select><br>
        <input type="submit" value="Mostrar" name="boton"> <br>
       <?php
      if(isset($_POST["boton"])){ 
        $p=$_POST["salario"];
        $s=$_POST["opt"];
       switch ($s){
          case 1:
          $j=($p*0.04);
           echo "este es su salario".$j; break;
          case 2:
            $o=($p*0.08);
              echo "este es su salario".$o; break;
          }
          }
    ?>
    </form>
    </div>
</body>

</html>