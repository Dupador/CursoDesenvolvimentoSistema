<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        input[type="text"], select, input[type="submit"] {
            margin-bottom: 10px;
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Calculadora PHP</h2>
        <form method="post" action="">
            <input type="text" name="valor1" placeholder="Digite o primeiro valor" required><br>
            <input type="text" name="valor2" placeholder="Digite o segundo valor" required><br>
            <select name="operacao">
                <option value="soma">Adição (+)</option>
                <option value="subtracao">Subtração (-)</option>
                <option value="multiplicacao">Multiplicação (*)</option>
                <option value="divisao">Divisão (/)</option>
                <option value="resto">Resto da Divisão (%)</option>
            </select><br>
            <input type="submit" value="Calcular">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            $operacao = $_POST['operacao'];

            switch ($operacao) {
                case 'soma':
                    $resultado = $valor1 + $valor2;
                    echo "Resultado: $valor1 + $valor2 = $resultado";
                    break;
                case 'subtracao':
                    $resultado = $valor1 - $valor2;
                    echo "Resultado: $valor1 - $valor2 = $resultado";
                    break;
                case 'multiplicacao':
                    $resultado = $valor1 * $valor2;
                    echo "Resultado: $valor1 * $valor2 = $resultado";
                    break;
                case 'divisao':
                    if ($valor2 != 0) {
                        $resultado = $valor1 / $valor2;
                        echo "Resultado: $valor1 / $valor2 = $resultado";
                    } else {
                        echo "Erro: divisão por zero!";
                    }
                    break;
                case 'resto':
                    $resultado = $valor1 % $valor2;
                    echo "Resultado: Resto da Divisão de $valor1 por $valor2 = $resultado";
                    break;
                default:
                    echo "Operação inválida!";
                    break;
            }
        }
        ?>
    </div>
</body>
</html>
