<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 30</title>
</head><body><center>
        <h1><mark>NOTAS</mark></h1>
        <form action="" method="POST">
            <label for="Nota1">Nota1:</label>
            <input type="number" id="Nota1" name="Nota1" required><br><br>
            <label for="Nota2">Nota2:</label>
            <input type="number" id="Nota2" name="Nota2" required><br><br>
            <label for="Nota3">Nota3:</label>
            <input type="number" id="Nota3" name="Nota3" required><br><br>
            <label for="Nota4">Nota4:</label>
            <input type="number" id="Nota4" name="Nota4" required><br><br>
            <button type="submit">CALCULAR</button><br><br>
        </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['Nota1'], $_POST['Nota2'], $_POST['Nota3'], $_POST['Nota4'])) {
            $nota1 =$_POST['Nota1'];
            $nota2 =$_POST['Nota2'];
            $nota3 =$_POST['Nota3'];
            $nota4 =$_POST['Nota4'];
            $notas = array($nota1, $nota2, $nota3, $nota4);
            rsort($notas);
            $promedio = ($notas[0] + $notas[1] + $notas[2]) / 3;
            echo "El promedio de las 3 mejores notas es: " . number_format($promedio, 2) . "<br>";
            if ($promedio >= 11) {
                echo "Aprobado";
            } else {
                echo "Reprobado";
            }}}
    ?>
    <br><br><footer>Lazaro Barbosa</footer> <br><br></center>
</body>
</html>