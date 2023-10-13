<html>
  <head>
  </head>
  <body>
    <?php
      $tem_cartao_fidelidade = true;
      $valor_compra = 150;
      $valor_frete = 40;

      /*
        Faça um script em PHP que:
         - Se o usuário possui cartão fidelidade E o valor da compra for maior ou igual a 500, o frete é grátis
         - Se o usuário possui cartão fidelidade E o valor da compra for maior que 200, o valor do frete é 10;
         - Se o usuário possui cartão fidelidade E o valor da compra for maior que 100, o valor do frete é 20;
         - Caso o usuário não tenha o cartão, o frete é cheio
      */

      if ($tem_cartao_fidelidade && $valor_compra >= 500) {
        $valor_frete = 0;
      } else if ($tem_cartao_fidelidade && $valor_compra >= 200) {
        $valor_frete = 10;
      } else if ($tem_cartao_fidelidade && $valor_compra >= 100) {
        $valor_frete = 20;
      }
    ?>

    <h2>Resumo do pedido:</h2>
    <p>Possui cartão fidelidade: <?= ($tem_cartao_fidelidade) ? 'Sim' : 'Não' ?></p>
    <p>Valor dos produtos: <?= $valor_compra ?></p>
    <p>Valor do frete: <?= $valor_frete ?></p>
    <p>Valor total: <?= $valor_compra + $valor_frete ?><p>
    
  </body>
</html>