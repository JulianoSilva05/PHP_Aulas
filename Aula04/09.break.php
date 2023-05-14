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
/*
Nessa aula aprendemos sobre laços (loops) para repetir um bloco de código várias vezes.
Existem algumas variações de laços, dentre elas:
while que possui uma condição de entrada
do-while que possui uma condição de permanência (sempre executa o bloco pelo menos uma vez)
for que possui a declaração de uma variável, uma condição entrada e o increment
Dentro do bloco do laço podemos pular uma interação com o comando continue
Com o comando break podemos sair do laço
A variável contador normalmente se chama i 
 */