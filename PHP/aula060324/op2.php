<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos Interativos</title>
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

        input[type="number"] {
            padding: 8px;
            margin-bottom: 10px;
            width: 100px;
        }

        input[type="submit"] {
            padding: 8px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post">
            <label for="v1">Valor 1:</label>
            <input type="number" id="v1" name="v1" required>
            <br>
            <label for="v2">Valor 2:</label>
            <input type="number" id="v2" name="v2" required>
            <br>
            <input type="submit" value="Calcular">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recebendo os valores do formulário
            $v1 = $_POST["v1"];
            $v2 = $_POST["v2"];

            // Realizando as operações aritméticas
            $resultado_adicao = $v1 + $v2;
            $resultado_subtracao = $v1 - $v2;
            $resultado_multiplicacao = $v1 * $v2;
            $resultado_divisao = $v1 / $v2;
            $resultado_resto_divisao = $v1 % $v2;
            $resultado_negacao_v2 = -$v2;

            // Exibindo os resultados
            echo "<br>Resultado da Adição: $v1 + $v2 = $resultado_adicao <br>";
            echo "Resultado da Subtração: $v1 - $v2 = $resultado_subtracao <br>";
            echo "Resultado da Multiplicação: $v1 * $v2 = $resultado_multiplicacao <br>";
            echo "Resultado da Divisão: $v1 / $v2 = $resultado_divisao <br>";
            echo "Resultado do Resto da Divisão: $v1 % $v2 = $resultado_resto_divisao <br>";
            echo "Resultado da Negação de $v2: $resultado_negacao_v2 <br>";
        }
        ?>
    </div>
</body>
</html>
