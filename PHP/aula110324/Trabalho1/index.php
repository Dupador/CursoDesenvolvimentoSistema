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
            <input type="submit" name="submit" value="Calcular">
        </form>

        <?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $valor_compra = $_POST["valor_conta"];
                $opcao_pagamento = $_POST["percentual_gorjeta"];
        
                $desconto = $valor_compra * $opcao_pagamento;
                $total_a_pagar = $valor_compra + $desconto;
        
                echo "<div class='resumo'>";
                echo "<h3>Resumo</h3>";
                echo "<p><strong>Total: </strong> R$ " . number_format($valor_compra, 2, ',', '.') . "</p>";
                echo "<p><strong>Gorjeta: </strong> ";
                if ($opcao_pagamento == 0.10) {
                    echo "10%";
                } elseif ($opcao_pagamento == 0.15) {
                    echo "15%";
                } elseif ($opcao_pagamento == 0.20) {
                    echo "20%";
                }
                echo "</p>";
                echo "<p><strong>Valor da Gorjeta:</strong> R$ " . number_format($desconto, 2, ',', '.') . "</p>";
                echo "<p><strong>Total a Pagar:</strong> R$ " . number_format($total_a_pagar, 2, ',', '.') . "</p>";
                echo "</div>";
            }		
		}
		?>
    </div>
</body>
</html>