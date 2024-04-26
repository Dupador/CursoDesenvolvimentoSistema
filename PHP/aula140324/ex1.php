<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Arrays Indexados</title>
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
        <h2>Exemplo de Arrays Indexados em PHP</h2>
        <?php
        // Criando um array usando a função array()
        $frutas = array("Maçã", "Banana", "Laranja", "Pera");

        // Criando um array usando a sintaxe de colchetes []
        $cores = ["Vermelho", "Verde", "Azul", "Amarelo"];
        ?>

        <h3>Lista de Frutas</h3>
		<h4>Criando um array usando a função array()</h4>
        <ul>
            <?php
            // Iterando sobre o array de frutas e exibindo cada uma delas como itens de lista HTML
            foreach ($frutas as $fruta) {
                echo "<li>$fruta</li>";
            }
            ?>
        </ul>

        <h3>Lista de Cores</h3>
		<h4>Criando um array usando a sintaxe de colchetes []</h4>
        <ul>
            <?php
            // Iterando sobre o array de cores e exibindo cada uma delas como itens de lista HTML
            foreach ($cores as $cor) {
                echo "<li>$cor</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
