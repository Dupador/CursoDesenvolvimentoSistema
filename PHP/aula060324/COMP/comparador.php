<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Comparação</title>
</head>
<body>
    <h2>Resultado da Comparação</h2>
    <?php
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $operacao = $_POST['operacao'];

    switch ($operacao) {
        case 'igual':
            $resultado = $valor1 == $valor2;
            echo "Resultado: $valor1 == $valor2 é " . ($resultado ? 'verdadeiro' : 'falso');
            break;
        case 'identico':
            $resultado = $valor1 === $valor2;
            echo "Resultado: $valor1 === $valor2 é " . ($resultado ? 'verdadeiro' : 'falso');
            break;
        case 'nao_igual':
            $resultado = $valor1 != $valor2;
            echo "Resultado: $valor1 != $valor2 é " . ($resultado ? 'verdadeiro' : 'falso');
            break;
        case 'diferente':
            $resultado = $valor1 <> $valor2;
            echo "Resultado: $valor1 <> $valor2 é " . ($resultado ? 'verdadeiro' : 'falso');
            break;
        case 'nao_identico':
            $resultado = $valor1 !== $valor2;
            echo "Resultado: $valor1 !== $valor2 é " . ($resultado ? 'verdadeiro' : 'falso');
            break;
        case 'menor':
            $resultado = $valor1 < $valor2;
            echo "Resultado: $valor1 < $valor2 é " . ($resultado ? 'verdadeiro' : 'falso');
            break;
        case 'maior':
            $resultado = $valor1 > $valor2;
            echo "Resultado: $valor1 > $valor2 é " . ($resultado ? 'verdadeiro' : 'falso');
            break;
        case 'menor_igual':
            $resultado = $valor1 <= $valor2;
            echo "Resultado: $valor1 <= $valor2 é " . ($resultado ? 'verdadeiro' : 'falso');
            break;
        case 'maior_igual':
            $resultado = $valor1 >= $valor2;
            echo "Resultado: $valor1 >= $valor2 é " . ($resultado ? 'verdadeiro' : 'falso');
            break;
        default:
            echo "Operação inválida!";
            break;
    }
    ?>
    <br><br>
    <form action="index.html">
        <input type="submit" value="Voltar para o Comparador">
    </form>
</body>
</html>
