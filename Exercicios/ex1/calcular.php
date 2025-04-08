<?php
$n1 = $_POST['n1'];
$cem = 0;
$cinquenta = 0;
$vinte = 0;
$dez = 0;
$cinco = 0;
$dois = 0;
$um = 0;

echo "<h2>Resultado:</h2>";

    while ($n1 = 0) 
    {
        if ($n1 > 100) {
            $n1 - 100;
            $cem = $cem +1; 
        }
        else if ($n1 > 50){
            $n1 - 50;
            $cinquenta++; 
        }
        else if ($n1 > 20){
            $n1 - 20;
            $vinte++; 
        }
        else if ($n1 > 10){
            $n1 - 10;
            $dez++; 
        }
        else if ($n1 > 5){
            $n1 - 5;
            $cinco++; 
        }
        else if ($n1 > 2){
            $n1 - 2;
            $dois++; 
        }
        else {
            $n1 - 1;
            $um++; 
        }
    };

    echo "Foram usadas ".$cem." de cem, ".$cinquenta." de cinquenta, ".$vinte." de vinte, ".$dez." de dez, ".$cinco." de cinco, ".$dois." de dois e ".$um." de um ";
?>