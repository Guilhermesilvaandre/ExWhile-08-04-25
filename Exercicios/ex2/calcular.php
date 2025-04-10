<?php
$n1 = $_POST['n1'];

$n2 = rand(1,10);
$contador = 0;

echo "<h2>Resultado:</h2>";
     
echo "numero escolido: ".$n1."<br>";

    while ($n1 > 0) {
        $n1 = $n1 - $n2;
        $contador = $contador + 1;
    }
    echo "numero sorteado: ".$n2."<br><br>";
    echo "Foram feitas ".$contador." subtrações até o valor chegar a zero ou um numero menor.";
?>