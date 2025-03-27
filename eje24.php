<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 24</title>
</head>
<body>
    <center>
    <header>
        <h1>Es par o impar</h1>
    </header>
    <main>
        <section>
            <form action="" method="POST">
    <label for="num">Ingresa un  numero</label>
    <input type="number" id="num" name="num">
    <button type="submit">Enviar</button>
            </form>
            <footer>
            <p>Lázaro Barbosa</p>
        </footer>  
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $numero=$_POST['num'];
                if($numero%2== 0){
                    $mensaje="El numero".$numero."es par";
            }else{
                $mensaje= "El número ".$numero."es impar";
            }
            echo $mensaje;
        }
            ?><br><br>
<a href="eje25.php">Siguiente practica -></a>
        </section>
    </main>
    </center>
</body>
</html>