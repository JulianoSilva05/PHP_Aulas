<?php

$i = 1;
$fim = 100;

for($i; $i <= $fim; $i++){
    if ($i %2 != 0){
        echo $i .PHP_EOL;
    }
}