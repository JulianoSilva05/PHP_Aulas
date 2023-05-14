<?php

$contador = 1;
$fim = 15;

for ($contador; $contador <= $fim;$contador += 1){
    if($contador == 13){
        continue;//quando o contador for igual a 13, ele não imprime e passa para a proxima linha
    }
    echo "#$contador" . PHP_EOL;
}
//ou quebre o loop com break

$contador = 1;
$fim = 15;

for ($contador; $contador <= $fim;$contador += 1){
    if($contador == 13){
        break;//quebra o loop na condição!
    }
    echo "#$contador" . PHP_EOL;
}