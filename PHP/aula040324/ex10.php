<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Concatenação de Strings em PHP</title>
</head>
<body>
    <?php
    // Definindo as variáveis
    $aluno = "João";
    $curso = "Programação";

    // Concatenando as strings para formar uma mensagem
    $mensagem = "O aluno " . $aluno . " está matriculado no curso de " . $curso . ".";
    
    // Exibindo a mensagem
    echo "<p>$mensagem</p>";
    ?>
</body>
</html>
