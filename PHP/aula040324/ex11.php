<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Tipos de Dados em PHP</title>
</head>
<body>
    <h2>Manipulação de Tipos de Dados em PHP</h2>

    <?php
    // Inicializando uma variável como inteiro
    $valor = 10;

    // Exibindo informações sobre a variável antes da conversão
    echo "<p><strong>Antes da Conversão:</strong></p>";
    echo "<p>Valor: $valor</p>";
    echo "<p>Tipo de Dados: " . gettype($valor) . "</p>";

    // Convertendo a variável para string usando settype
    settype($valor, "string");

    // Exibindo informações sobre a variável depois da conversão
    echo "<p><strong>Depois da Conversão:</strong></p>";
    echo "<p>Valor: $valor</p>";
    echo "<p>Tipo de Dados: " . gettype($valor) . "</p>";

    // Exibindo informações detalhadas sobre a variável usando var_dump
    echo "<p><strong>Informações Detalhadas:</strong></p>";
    var_dump($valor);
    ?>
</body>
</html>
