<?php
// Comprobar si se enviaron los números a través del formulario
if(isset($_POST['numero1']) && isset($_POST['numero2'])) {
    // Obtener los números del formulario
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    // Sumar los números
    $suma = $numero1 + $numero2;

    // Mostrar el resultado
    echo "La suma de $numero1 y $numero2 es: $suma";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de dos números</title>
</head>
<body>
    <h2>Suma de dos números</h2>
    <form method="post" action="">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" required><br><br>
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" required><br><br>
        <input type="submit" value="Sumar">
    </form>
</body>
</html>