<?php

//laço (for) para tabuada 8
for ($i = 1; $i <= 10; $i++) {
    echo"8 x $i = " . (8 * $i) . "\n";
}

// while -(enquanto) contagem regressiva
$n = 5;
while ($n >0) {
    echo $n . "\n";
    $n--;
}
// do while -(faça enquanto) executa ao menos 1 vez
$x = 10;
do {
    echo "x vale: $x <br>";
    $x++;
} while ($x < 10);
