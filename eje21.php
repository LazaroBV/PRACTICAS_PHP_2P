<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21</title>
</head>
<body>
<center>
    <header>  
        <h1>¿ Mayor o menor ?</h1>
        </header>
        <main>
        <section>
        <form action="" method="POST">
            <label for="num1"> Numero 1:</label>
            <input type="number" id="num1" name="num1"><br><br>
            <label for="num2"> Numero 2:</label>
            <input type="number" id="num2" name="num2"><br><br>
            <label for="num3"> Numero 3:</label>
            <input type="number" id="num3" name="num3"><br><br>
            <button type ="submit">CALCULAR</button><br><br>
        </form> 
    </section> 
        </main>
        <footer>
            <p>Lázaro Barbosa</p>
        </footer>  
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $num3=$_POST['num3'];
    if ($num1>$num2 && $num1>$num3){
        $mayor=$num1;
    }
    else if ($num2>$num1 && $num2>$num3){
        $mayor=$num2;   
    }
    else {
        $mayor=$num3;
    }
    echo "El numero mayor es $mayor";
}
?><br><br>
<a href="eje22.php">Siguiente practica -></a>
    </center>
</body>
</html>