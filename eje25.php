<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 25</title>
</head>
<body>
    <center>
    <header>
        <h1></h1>
    </header>
    <main>
        <section>
        <form action="" method="POST">
        <label for="num">Ingresa un numero</label>
        <input type="number" name="num" id="num">
        <button type="submit">Cacular</button>
        </form>
        <footer>
            <p>Lázaro Barbosa</p>
        </footer>  
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $numero=$_POST['num'];
            if($numero%2!= 0){
                $mensaje="El doble del numero".$numero. "es" .($numero * 2);
        }else{
            $mensaje= "El triple de numero ".$numero. "es" . ( $numero * 3);
        }
        echo $mensaje;
    }
        ?><br><br>
<a href="eje26.php">Siguiente practica -></a>
        </section>
    </main>
    </center>
</body>
</html>