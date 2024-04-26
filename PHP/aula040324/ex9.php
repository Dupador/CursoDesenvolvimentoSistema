<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de PHP com HTML</title>
</head>
<body>
    <h1>Manipulação de Strings e Data</h1>

    <?php
    // String de exemplo
    $texto = "Oi, Mundo!";

    // Exibindo o comprimento da string
    $comprimento = strlen($texto);
    echo "<p>Comprimento da string: $comprimento</p>";

    // Convertendo a string para minúsculas
    $minusculas = strtolower($texto);
    echo "<p>String em minúsculas: $minusculas</p>";

    // Convertendo a string para maiúsculas
    $maiusculas = strtoupper($texto);
    echo "<p>String em maiúsculas: $maiusculas</p>";

    // Substituindo parte da string
    $nova_string = str_replace("Mundo", "Planeta", $texto);
    echo "<p>String com substituição: $nova_string</p>";

    ?>
</body>
</html>
