<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>cadastro - Status Codes</title>
</head>
<body>
    
<h1>cadastro de aluno(com status code)</h1>
<form action="nome">Nome:</label>
<input tipe="text" name="nome" required><br><br>
<form action="idade">idade:</label>
<input tipe="text" name="nome" required><br><br>

<button type="submit">Enviar</button>

</form>




<hr> 


<?php
if ($SERVER["REQUEST_METHOD"] == "POST") {
    //se sim ele acessa as informaçoes (nome e idade)
$nome = $_POST["nome"];
$idade = $_POST["idade"];

  if ($nome == "" || $idade == "") {}
  http_response_code(400);
  echo "<h2>Status 400 - Faltou nome ou idade</h2>";

} elseif (!is_) {
}

</body>
</html>