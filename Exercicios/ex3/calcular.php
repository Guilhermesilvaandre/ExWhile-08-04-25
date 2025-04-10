<?php
$n1 = 0;
$x = 0;
$n2 = 0;
$qtde = 0;


$n1 = rand(0,100);



    for ($qtde = 1; $n2 != $n1 ; $qtde++) 
    { 

        $n2 = rand(0,100);
        
            echo "$n2 <br>";
          
    }
    $qtde--;
    
    echo "Numero base : $n1 <br><br>";
    echo "Numeros gerados ate acertar: $qtde <br>";
?>
