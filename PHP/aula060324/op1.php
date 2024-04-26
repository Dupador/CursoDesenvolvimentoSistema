<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Definindo valores para operações
        $v1 = 10;
        $v2 = 3;

        // Adição
        $resultado_adicao = $v1 + $v2;
        echo "Adição: $v1 + $v2 = $resultado_adicao <br>";

        // Subtração
        $resultado_subtracao = $v1 - $v2;
        echo "Subtração: $v1 - $v2 = $resultado_subtracao <br>";

        // Multiplicação
        $resultado_multiplicacao = $v1 * $v2;
        echo "Multiplicação: $v1 * $v2 = $resultado_multiplicacao <br>";

        // Divisão
        $resultado_divisao = $v1 / $v2;
        echo "Divisão: $v1 / $v2 = $resultado_divisao <br>";

        // Resto da Divisão
        $resultado_resto_divisao = $v1 % $v2;
        echo "Resto da Divisão: $v1 % $v2 = $resultado_resto_divisao <br>";

        // Negação
        $resultado_negacao = -$v2;
        echo "Negação de $v2: $resultado_negacao <br>";
        ?>
    </div>
</body>
</html>
