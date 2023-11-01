<?php

$idade = 16;
$numeroDePessoas = 1;
echo "Somente pessoa com 18 anos ou mais são permitidas ou pessoas com 16 anos e acompanhadas\n";

if($idade >= 18)
{
    echo "Bem vindo, você já tem mais de 18 anos\n";
}
else if($idade >= 16 && $numeroDePessoas >= 2)
{
    echo "Pode entrar já que você esta acompanhado";
}
else
{
    echo "Você ainda não tem idade o suficiente para entrar\n";
}

// Podemos usar && ou and
// Podemos usar or ou ||
