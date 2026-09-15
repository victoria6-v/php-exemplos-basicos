<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Controle de Acesso</title>
</head>
<body>

<form method="post">

    <label>Nome:</label>
    <input type="text" name="nome" required>

    <br><br>

    <label>Ano de Nascimento:</label>
    <input type="number" name="ano" required>

    <br><br>

    <button type="submit">Verificar</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $ano = $_POST["ano"];

    $idade = 2026 - $ano;

    if ($idade >= 18) {

        echo "Acesso permitido, $nome!";

        $arquivo = fopen("log_acessos.txt", "a");

        $linha = $nome . " - " . $idade . " anos\n";

        fwrite($arquivo, $linha);

        fclose($arquivo);

    } else {

        echo "Acesso negado, $nome!";

    }
}

?>

</body>
</html>