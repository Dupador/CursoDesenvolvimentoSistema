<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão Inteira em PHP</title>
</head>
<body>
    <h2>Divisão Inteira em PHP</h2>
    <?php
    // Calculando a divisão entre 5 e 3
    $resultado = 5 / 3;
	$resultado_formatado = number_format($resultado, 2);
	echo "<p>Resultado da divisão entre 5 e 3: $resultado_formatado</p>";

    // Convertendo o resultado para inteiro
    settype($resultado, "integer");

    // Exibindo o resultado da divisão inteira
    echo "<p>Resultado da divisão inteira entre 5 e 3: $resultado</p>";
    ?>
</body>
</html>
