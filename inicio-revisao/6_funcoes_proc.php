<?php

//exemplo de função php (uma função sempre tem retorno)
function somar(float $a, float $b): float {
    return $a + $b;
}

//chamando a função
echo somar(4.5, 9.3);
echo "<br>";

//exemplo de procedimento (não tem return, pois não calcula)
function saudacao($nome ="aluno") {
    echo "olá, $nome seja bem-vindo(a)!!";
}


//usando /exibindo (procedimento)
saudacao("maria Smart");
echo '<br>';
saudacao("mary lost");


