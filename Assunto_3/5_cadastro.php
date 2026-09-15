<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuario</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome"> Nome:</label>
        <input type="txt" name="nome"  required>

        <label for= "senha">Senha:</label>
        <input type="password" name="senha" required>

        <button type="submit">cadastrar</button>
    </form>




    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

     $arquivo = fopen("usuarios.txt", "a");

     $linha = $nome . ";" . $senha . "\n";

     fwrite($arquivo, $linha);

     fclose($arquivo);

    header("location: " . $_SERVER["PHP_SELF"] . "?sucesso=1");
    exit;
    } 
    if (isset($GET["sucesso"])){

     echo"<p>Usuario cadastrado com sucesso!<p>";
     
    header("refresh: 5, url= " . $_SERVER["PHP_SELF"]);

    }




?>


</body>
</html>