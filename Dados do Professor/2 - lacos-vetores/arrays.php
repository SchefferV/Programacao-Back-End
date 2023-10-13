<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        //array sequencial:
        //$lista_compras = array('Ovos', 'Banana', 'Leite', 'Alface', 'Nutella');
        //ou
        $lista_compras = ['Ovos', 1.5, 'Banana', 'Leite', 'Alface', 'Nutella'];
        
        echo '<pre>';
        var_dump($lista_compras);
        echo '</pre>';

        echo '<hr>';

		echo '<pre>';
		print_r($lista_compras);
		echo '</pre>';

        echo '<hr>';

        echo '<pre>';
		echo $lista_compras[4];
		echo '</pre>';

        echo '<hr>';


        //array associativo
        $lista = [
			'Fruta' => 'Manga',
			'PrecisaCigarro' => true,
			'c' => 'Moranguinhos',
			'd' => 'Uva'
		];

        echo '<pre>';
		print_r($lista);
		echo '</pre>';

        $lista['x'] = 'Traue'; //adiciona um novo valor à lista

        echo '<hr>';

        echo '<pre>';
		print_r($lista);
		echo '</pre>';
    ?>
</body>
</html>