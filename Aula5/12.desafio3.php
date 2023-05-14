<?php

$altura = 1.74;
$peso = 50;

$imc = $peso/($altura**2);

if ($imc < 18.5){
    echo "IMC = $imc ".PHP_EOL."Abaixo do peso";
}

elseif($imc < 24.9){
    echo "IMC = $imc" .PHP_EOL."Peso normal";
}

elseif($imc < 29.9){
    echo "IMC = $imc ".PHP_EOL."Pré-obesidade";
}

elseif($imc < 34.9){
    echo "IMC = $imc ".PHP_EOL."Obesidade Grau 1";
}

elseif($imc < 39.9){
    echo "IMC = $imc ".PHP_EOL."Obesidade Grau 2";
}

elseif($imc > 40){
    echo "IMC = $imc ".PHP_EOL."Obesidade Grau 3";
}

else{
    echo "Digite um valor valido!";
}
