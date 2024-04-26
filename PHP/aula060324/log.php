<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h2 {
            text-align: center;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        select {
            padding: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            margin-top: 10px;
            padding: 8px 16px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Operadores Lógicos</h2>
    <form method="post" action="">
        <label for="a">Valor A (true/false):</label>
        <select name="a" id="a">
            <option value="true">True</option>
            <option value="false">False</option>
        </select><br><br>
        <label for="b">Valor B (true/false):</label>
        <select name="b" id="b">
            <option value="true">True</option>
            <option value="false">False</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>

    <div class="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST['a'] == 'true';
            $b = $_POST['b'] == 'true';

            echo "<h3>Resultados:</h3>";
            echo "A = " . ($a ? 'True' : 'False') . "<br>";
            echo "B = " . ($b ? 'True' : 'False') . "<br><br>";

            echo "A && B (E) = " . ($a && $b ? 'True' : 'False') . " - O valor será verdadeiro quando as duas variáveis são verdadeiras<br>";
            echo "A || B (OU) = " . ($a || $b ? 'True' : 'False') . " - O valor será verdadeiro quando uma das variáveis é verdadeira<br>";
            echo "A xor B (Exclusivo) = " . (($a xor $b) ? 'True' : 'False') . " - Exclusivo, quando exatamente uma das variáveis é verdadeira<br>";
            /*xor retorna verdadeiro se os dois operandos forem diferentes, e falso se os dois forem iguais, tanto verdadeiro como falso.*/
             echo "!A (Negação) = " . (!$a ? 'True' : 'False') . " - A variável será verdadeira quando o valor de A não for verdadeiro<br>";
        }
        ?>
    </div>
</body>
</html>
