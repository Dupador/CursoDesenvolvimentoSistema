<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Gorjeta com Fator de Qualidade do Serviço</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Calculadora de Gorjeta com Fator de Qualidade do Serviço</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Valor da Conta: <input type="number" name="valor_conta" min="0" step="0.01" required><br>
            Percentual de Gorjeta:
            <input type="radio" name="percentual_gorjeta" value="0.10" required> 10%
            <input type="radio" name="percentual_gorjeta" value="0.15"> 15%
            <input type="radio" name="percentual_gorjeta" value="0.20"> 20%<br>
            Qualidade do Serviço:
            <input type="radio" name="qualidade_servico" value="0.8" required> Ruim
            <input type="radio" name="qualidade_servico" value="1.0"> Regular
            <input type="radio" name="qualidade_servico" value="1.1"> Bom
            <input type="radio" name="qualidade_servico" value="1.2"> Excelente<br>
            <input type="submit" name="submit" value="Calcular">
        </form>

        <?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$valor_conta = $_POST["valor_conta"];
            $percentual_gorjeta = $_POST["percentual_gorjeta"];
            $qualidade_servico = $_POST["qualidade_servico"];

            $gorjeta = $valor_conta * $percentual_gorjeta;
            $total_a_pagar = $valor_conta + $gorjeta;

			echo "<div class='resumo'>";
			echo "<h3>Resumo da Gorjeta</h3>";
			echo "<p><strong>Valor da Conta:</strong> R$ " . number_format($valor_conta, 2, ',', '.') . "</p>";
			echo "<p><strong>Percentual de Gorjeta:</strong> " . ($percentual_gorjeta * 100) . "%</p>";
			echo "<p><strong>Qualidade do Serviço:</strong> ";
			if ($qualidade_servico == 0.8) {
                $total_a_pagar = $total_a_pagar - $gorjeta;
			} elseif ($qualidade_servico == 1.0) {
                $total_a_pagar = $total_a_pagar *  $qualidade_servico;
				echo "Regular";
			} elseif ($qualidade_servico == 1.1) {
                $total_a_pagar = $total_a_pagar *  $qualidade_servico;
				echo "Bom";
			} elseif ($qualidade_servico == 1.2) {
                $total_a_pagar = $total_a_pagar *  $qualidade_servico;
				echo "Excelente";
			}
			echo "</p>";
			echo "<p><strong>Valor da Gorjeta:</strong> R$ " . number_format($gorjeta, 2, ',', '.') . "</p>";
			echo "<p><strong>Total a Pagar:</strong> R$ " . number_format($total_a_pagar, 2, ',', '.') . "</p>";
			echo "</div>";
		}
		?>
    </div>
</body>
</html>