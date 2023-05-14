<?php

$idade = 17;
$nome = "Juliano";

echo "Você só pode entrar se tiver mais do que 18 anos e se seu nome for $nome!" .PHP_EOL;
if ($idade == 18 && $nome == 'Juliano'){
    echo "Você tem $idade anos." . PHP_EOL; 
    echo "Pode entrar";
}
else
    echo "Não pode entrar!";
