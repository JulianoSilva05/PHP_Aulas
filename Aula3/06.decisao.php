<?php

$idade = 18;
$nome = "Juliano";

echo "Você só pode entrar se tiver mais do que 18 anos ou a partir de 16 anos acompanhado" .PHP_EOL;
if ($idade == 18){//or = ||     and = &&
    echo "Você tem $idade anos." . PHP_EOL; 
    echo "Pode entrar";
}
else{
    echo "Não pode entrar!";
}
    
