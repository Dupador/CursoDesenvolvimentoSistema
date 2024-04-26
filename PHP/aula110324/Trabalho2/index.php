<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Gorjeta</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Calculadora de Gorjeta</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Valor da Conta: <input type="number" name="valor_conta" min="0" step="0.01" required><br>
            Percentual de Gorjeta:
            <input type="radio" name="percentual_gorjeta" value="0.10" required> 10%
            <input type="radio" name="percentual_gorjeta" value="0.15"> 15%
            <input type="radio" name="percentual_gorjeta" value="0.20"> 20%<br>
            Área:
            <input type="radio" name="area" value="1.0" required> Sem Cover
            <input type="radio" name="area" value="1.1"> Área Cover
            <input type="radio" name="area" value="1.2"> Área VIP<br>
            <input type="submit" name="submit" value="Calcular">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $valor_compra = $_POST["valor_conta"];
                $percentual_gorjeta = $_POST["percentual_gorjeta"];
                $opcao_area = $_POST["area"];

                $gorjeta = $valor_compra * $percentual_gorjeta;
                $total_a_pagar = ($valor_compra + $gorjeta) * $opcao_area;
        
                echo "<div class='resumo'>";
                echo "<h3>Resumo do Desconto</h3>";
                echo "<p><strong>Total da conta:</strong> R$ " . number_format($valor_compra, 2, ',', '.') . "</p>";
                echo "<p><strong>Gorjeta:</strong> ";
                if ($percentual_gorjeta == 0.10) {
                    echo "+10%";
                } elseif ($percentual_gorjeta == 0.15) {
                    echo "+15%";
                } elseif ($percentual_gorjeta == 0.20) {
                    echo "+20%";
                }
                echo "</p>";
                echo "<p><strong>Area:</strong> ";
                if ($opcao_area == 1.0) {
                    echo "+1.0%";
                } elseif ($opcao_area == 1.1) {
                    echo "+1.2%";
                } elseif ($opcao_area == 1.2) {
                    echo "+1.2%;";
                }
                echo "</p>";
                echo "<p><strong>Total a Pagar:</strong> R$ " . number_format($total_a_pagar, 2, ',', '.') . "</p>";
                echo "</div>";
            }		
		?>
    </div>
</body>
</html>