<?php
//concatenação
$idade = 33;
echo 'Olá mundo, tenho ' . $idade . ' anos';
/*
Porem, quando usamos concatenação devemos colocar ponto e usar aspas duplas
*/
echo "\r\nOlá mundo, tenho $idade anos";
/*
Diferença entre " e ':
    aspas simples (') - o PHP trata como scring e não executa nenhum código. O php não interpreta
    aspas dupals (") - o PHP trata como scring, porem ele entende que pode ser nescessario interpretar algum código
*/
