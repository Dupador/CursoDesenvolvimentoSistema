<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de String</title>
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
        }

        input[type="text"], input[type="submit"] {
            margin-bottom: 10px;
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Operadores de String</h2>
        <form method="post" action="">
            <input type="text" name="nome" placeholder="Digite seu nome" required><br>
            <input type="text" name="sobrenome" placeholder="Digite seu sobrenome" required><br>
            <input type="submit" value="Concatenar">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];

            // Concatenação
            $nome_completo = $nome . ' ' . $sobrenome;
            echo "Nome Completo (Concatenação): $nome_completo <br>";

            // Atribuição de Concatenação
            $nome .= ' ' . $sobrenome;
            echo "Nome Completo (Atribuição de Concatenação): $nome";
        }
        ?>
    </div>
</body>
</html>
