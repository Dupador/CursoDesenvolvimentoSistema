<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
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
        <h2>Agenda de Contatos</h2>
        <?php
        // Array multidimensional representando a agenda de contatos
        $agenda = array(
            array(
                "nome" => "João",
                "telefone" => "(11) 1234-5678",
                "cidade" => "São Paulo"
            ),
            array(
                "nome" => "Maria",
                "telefone" => "(21) 9876-5432",
                "cidade" => "Rio de Janeiro"
            ),
            array(
                "nome" => "Pedro",
                "telefone" => "(31) 4567-8901",
                "cidade" => "Belo Horizonte"
            )
        );
        ?>

        <h3>Contatos na Agenda:</h3>
        <ul>
            <?php foreach ($agenda as $contato): ?>
                <li>
                    <strong>Nome:</strong> <?php echo $contato["nome"]; ?><br>
                    <strong>Telefone:</strong> <?php echo $contato["telefone"]; ?><br>
                    <strong>Cidade:</strong> <?php echo $contato["cidade"]; ?><br>
                </li>
            <?php endforeach; ?>
        </ul>

        <h3>Exemplos de Acessos aos Elementos do Array:</h3>
        <ul>
            <li>Acessando o telefone de Maria: <?php echo $agenda[1]["telefone"]; ?></li>
            <li>Acessando a cidade de Pedro: <?php echo $agenda[2]["cidade"]; ?></li>
        </ul>
    </div>
</body>
</html>
