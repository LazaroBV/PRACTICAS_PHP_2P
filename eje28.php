<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 28</title>
</head>
<body>
   <center>
    <header><h1>¿Ya eres mayor de edad?</h1></header>
<main>
    <section>
<form action="" method="POST">
    <label for="edad">Ingresa tu edad:</label>
    <input type="number" id="edad" name="edad"> <br><br>
    <button type="submit">VERIFICAR</button> <br><br>
</form>
    </section>
</main>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $edad=$_POST['edad'];


    if ($edad <= 18){
        echo "Eres menor de edad";

    } else {
        echo "Eres mayor de edad";
    }
}

?>
<br><br><footer>Lazaro Barbosa</footer> <br><br>
<a href="eje29.php">Siguiente Practica</a>
   </center> 
</body>
</html>