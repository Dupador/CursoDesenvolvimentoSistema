<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Calculadora</title>
</head>
<body>
    <h2>Resultado da Calculadora</h2>
    <?php
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
    ?>
    <br><br>
    <form action="index.html">
        <input type="submit" value="Voltar para a Calculadora">
    </form>
</body>
</html>

