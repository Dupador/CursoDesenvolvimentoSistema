<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Array com HTML</title>
</head>
<body>
    <h1>Lista de Frutas</h1>

    <?php
    // Criando um array de frutas.
    $frutas = array("Maçã", "Banana", "Laranja", "Morango", "Abacaxi");

    // Acessando elementos do array usando índices.
    echo "<p>A primeira fruta é: " . $frutas[0] . "</p>";
    echo "<p>A segunda fruta é: " . $frutas[4] . "</p>";

    // Adicionando um novo elemento ao array.
    $frutas[] = "Uva";

    // Exibindo o array atualizado com print_r.
    echo "<p>Lista de frutas atualizada: </p>";
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";
    ?>
</body>
</html>
