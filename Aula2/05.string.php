<?php
//concatenação
$idade = 33;
echo "Olá mundo!" . PHP_EOL;
echo "Eu tenho \"$idade\" anos";
/*
Porem, quando usamos concatenação devemos colocar ponto e usar aspas duplas
*/
echo "\r\nOlá mundo, tenho $idade anos\n";
/*
Diferença entre " e ':
    aspas simples (') - o PHP trata como scring e não executa nenhum código. O php não interpreta
    aspas dupals (") - o PHP trata como scring, porem ele entende que pode ser nescessario interpretar algum código
*/
//no Windows usamos o \n para dar uma quebra de linha, esse comando pode dar errado em outros sistemas
//para isso usamos o comando em PHP para dar quebra de linha que funcione em qualquer SO (PHP_EOL)
echo "Texto da primeira linha" . PHP_EOL;
echo "\tTexto da Segunda linha";//\t = tabulação
echo PHP_EOL . PHP_EOL;

echo "Você pode entrar, se tiver mais de 18 anos!" . PHP_EOL;
echo "Você tem $idade anos, pode entrar!";


/*
Nesta aula, aprendemos:

Para concatenar uma string com uma outra variável usamos o . (ponto)
Podemos definir uma string com aspas simples(') ou duplas(")
Para interpretar um valor da variável ou caractere especial dentro da string devemos usar aspas duplas
caracteres especias são:
Nova linha: \n ou \r
Tab: \t
PHP possui uma constante para indicar uma quebra de linha: PHP_EOL
*/
