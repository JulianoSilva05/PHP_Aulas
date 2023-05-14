<?php

$idade = 18;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} elseif ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar.";
}

echo PHP_EOL;
echo "Adeus!";

/*
ssa aula, aprendemos sobre controle de fluxo (decisões) através do if:

Podemos tomar uma decisão no código através do if, elseif e else
if e elseif vão avaliar uma condição, se for verdadeira executam o bloco associado
O if é o primeiro comando, elseif e else são opcionais
O bloco elseif sempre precisa de um if antes
O bloco else sempre precisa de um if ou elseif antes -O bloco else só executa se nenhuma das condições anteriores forem verdadeiras
Através do && (AND lógico) e do || (OR lógico) podemos avaliar mais de uma condição

*/