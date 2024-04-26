<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Arrays Associativos</title>
    <style>
        /* Estilos CSS para a página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Exemplo de Arrays Associativos em PHP</h2>
        <?php
        // Criando um array associativo especificando chaves e valores para cada elemento
        $pessoa = array(
            "nome" => "João",
            "idade" => 25,
            "cidade" => "São Paulo"
        );
        ?>

        <h3>Detalhes da Pessoa</h3>
        <ul>
            <?php
            // Iterando sobre o array associativo e exibindo cada chave e valor
            foreach ($pessoa as $chave => $valor) {
                echo "<li><strong>$chave:</strong> $valor</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
