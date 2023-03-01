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
    <form action="ejercicio10.php" method="post">
        <label >Elija un numero</label><br>
   <select name="opt">
                <option value="1" >1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
   </select>
   <input type="submit" value="Mostrar" name="boton">  <br>
   
   <?php
$s=$_POST["opt"];
if(isset($_POST["boton"])){ 
 switch ($s){
    case 1: echo "El nùmero coresponde a lunes"; break;
    case 2: echo "El nùmero coresponde a martes"; break;
    case 3: echo "El nùmero coresponde a miercoles"; break;
    case 4: echo "El nùmero coresponde a jueves"; break;
    case 5: echo "El nùmero coresponde a viernes"; break;
    case 6: echo "El nùmero coresponde a sabado"; break;
    case 7: echo "El nùmero coresponde a domingo"; break;
    }
    }
?>
</form>
</div>
</body>
</html>