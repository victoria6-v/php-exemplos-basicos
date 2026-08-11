<?php

//criando variaveis
$idade =19;
$temdocumento =false;

//estrutura de decisão (operador E)
if ($idade >= 18 && $temdocumento) {
    echo "pode tirar carteira!";
} else {
    echo "não pode tirar carteira";
}

//estrutura de decisão (operador ou)
if ($idade >= 18 || $temdocumento) {
    echo "\npode tirar carteira!";
} else {
    echo "não pode tirar carteira";
}

//operador negaçaõ
$presente = false;

if (!$presente) {
    echo "\nO aluno esta presente";
} else {
    echo"\nO aluno esta ausente";
}
