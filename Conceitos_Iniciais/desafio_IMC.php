<?php

$peso = 91.4;
$altura = 1.74;

$imc = $peso / ($altura * $altura);
// $peso / $altura ** 2;

echo "Seu Peso é: $peso" . PHP_EOL;
echo "Sua Altura é: $altura" .PHP_EOL;
echo "Seu IMC: $imc" . PHP_EOL;

if($imc < 18)
{
    echo "IMC abaixo do recomendado";
}
else if($imc < 25)
{
    echo "IMC dentro do recomendado";
}
else
{
    echo "IMC acima do recomendado";
}