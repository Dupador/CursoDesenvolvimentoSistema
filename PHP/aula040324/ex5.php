<?php
// Declaração e atribuição de uma variável do tipo booleano.
$temConta = false;

// Mensagem baseada na variável booleana.
if ($temConta) {
    $mensagem = "Você possui uma conta cadastrada.";
} else {
    $mensagem = "Você não possui uma conta cadastrada.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Conta</title>
</head>
<body>
    <h1>Verificação de Conta</h1>
    <p><?php echo $mensagem; ?></p>
</body>
</html>
