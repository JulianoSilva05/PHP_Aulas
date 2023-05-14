<?php

$contador = 1;
$fim = 15;

for ($contador; $contador <= $fim;){
    echo "#$contador" . PHP_EOL;
    $contador += 1;
}

//ou
$contador = 1;
$fim = 15;

for ($contador; $contador <= $fim;$contador += 1){
    echo "#$contador" . PHP_EOL;
    
}
