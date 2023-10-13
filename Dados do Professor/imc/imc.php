<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $imc = $peso / ($altura * $altura);
        //apenas para testarmos a interceptação dos dados do form:
        //echo $peso;
        //echo '<br>';
        //echo $altura;
        //echo '<br>';
        //echo $imc;

        function classificaIMC($imc) {
            if ($imc < 16) {
                return 'Magreza grave';
            } elseif ($imc >= 16 &&  $imc < 17) {
                return 'Magreza moderada';
            } elseif ($imc >= 17 &&  $imc < 18.5) {
                return 'Magreza leve';
            } elseif ($imc >= 18.5 &&  $imc < 25) {
                return 'Saudável';
            } elseif ($imc >= 25 &&  $imc < 30) {
                return 'Sobrepeso';
            } elseif ($imc >= 30 &&  $imc < 35) {
                return 'Obesidade grau I';
            } elseif ($imc >= 35 &&  $imc < 40) {
                return 'Obesidade grau II';
            } else {
                return 'Obesidade grau III';
            }
        }

    ?>
    <h1>Calculadora IMC</h1>
    <hr>
    <div class="formulario">
        <h2>Resultados</h2>
        <hr>
        <h3>Peso: <?= $peso ?></h3>
        <h3>Altura: <?= $altura ?></h3>
        <h3>IMC: <?= number_format($imc, 2, ',', '') ?></h3>
        <h3>Classificação: <?= classificaIMC($imc) ?></h3>
    </div>
    <a href="./">Calcular novamente</a>
</body>
</html>