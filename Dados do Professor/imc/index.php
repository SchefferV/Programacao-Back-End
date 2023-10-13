<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculadora IMC</h1>
    <hr>
    <div class="formulario">
        <form method="post" action="imc.php">
            <div class="campo-form">
                <label>Peso:</label>
                <input type="number" name="peso"> Kg
            </div>
            <div class="campo-form">
                <label>Altura:</label>
                <input type="number" step="0.01" name="altura"> m
            </div>
            <div class="campo-form">
                <input type="submit" value="Calcular IMC">
            </div>
        </form>
    </div>
</body>
</html>