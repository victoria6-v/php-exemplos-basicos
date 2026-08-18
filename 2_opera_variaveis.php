<?php

// passando valores pela url (metodo gerais )
//http://localhost/php-exemplos-basicos/2_opera_variaveis.php?numero1=10&numero2=5

//recebe 2 valores
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];

//verifica se os valores foram passados corretamente
// a função nativa do php "isset" faz isso 
if  (isset($numero1)&&($numero2)) {
    $numero1 = (float)$numero1;
    $numero2 = (float)$numero2;


//calculos
$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multiplicacao= $numero1 * $numero2;
$divisao= $numero1 / $numero2;

//exibção do resultado
echo "Soma: $soma <br>";
echo"subtracao: $subtracao <br>";
echo"multiplicacao: $multiplicacao <br>";
echo"divisao: $divisao <br>";

} else {
    echo "por favor, forneça os valores pela url";
}
