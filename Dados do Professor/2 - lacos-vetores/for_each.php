<?php

    $notas = array('Fernando' => 10, 'Sandro' => 7, 
                'David' => 8.5, 'Nathalia' => 10, 'Traue' => 3);


   echo '<ul>';
   foreach($notas as $aluno => $nota) {
    /*
    if ($nota >= 6) {
        echo '<li>O(a) aluno(a) ' . $aluno . ' tirou ' . $nota . ' - APROVADO</li>';
    } else {
        echo '<li>O(a) aluno(a) ' . $aluno . ' tirou ' . $nota . ' - REPROVADO</li>';
    }*/
    //é o mesmo que (com ternário):
        echo '<li>O(a) aluno(a) ' . $aluno . ' tirou ' . $nota;
        echo ($nota >= 6) ? ' - APROVADO' : ' - REPROVADO' . '</li>';  
   }
   //criem uma forma de verificar se o aluno está aprovado ou não
   echo '</ul>';

?>