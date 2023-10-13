<?php
    $lista_coisas = [];
    //$lista_coisas = array();

    $lista_coisas['frutas'] = array(1 => [2, 'Bananas'], 2 => [4, 'Maçã']);

    $lista_coisas['laticinios'] = array(1 => ['qtd' => 12, 'Leite']);


    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';
?>