<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferença entre Pré e Pós-incremento</title>
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
            text-align: center;
        }

        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Diferença entre Pré e Pós-incremento</h2>
        <div class="result">
            <?php
            $i = 0;
            echo "<h3>Pré-incremento (++\$i):</h3>";
            echo "Valor inicial de \$i: $i <br>";
            echo "Valor após o pré-incremento: " . ++$i . "<br>";
            echo "Valor final de \$i: $i <br>";

            $j = 0;
            echo "<h3>Pós-incremento (\$j++):</h3>";
            echo "Valor inicial de \$j: $j <br>";
            echo "Valor antes do pós-incremento: " . $j++ . "<br>";
            echo "Valor final de \$j: $j <br>";
            ?>
        </div>
    </div>
</body>
</html>
