<html>

<head>
    <title>PHP Test</title>
</head>

<body>
    <?php

        #Variável tipo "String":
        $nome = "Thiago G. Traue";

        #Variável tipo inteiro:
        $idade = 250;

        #Variável tipo real (float):
        $saldo_em_conta = 20.52;

        #Booleana (V ou F)
        $fumante = false;

    ?>

    <h1>Dados informados</h1>
    <hr>
    <p>Nome: <?= $nome ?> </p>
    <p>Idade: <?= $idade ?> </p>
    <p>Saldo em Conta: <?= $saldo_em_conta ?> </p>
    <p>Fumante: <?= $fumante ?> </p>

</body>

</html>