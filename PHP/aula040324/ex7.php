<?php
// Definição da classe Pessoa
class Pessoa {
    public $nome;
    public $idade;
    
    public function apresentar() {
        return "Olá! Meu nome é {$this->nome} e tenho {$this->idade} anos.";
    }
}

// Instanciando um objeto da classe Pessoa
$pessoa = new Pessoa();
$pessoa->nome = "João";
$pessoa->idade = 30;

$pessoa1 = new Pessoa();
$pessoa1->nome = "admin";
$pessoa1->idade = "1000";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Objeto com HTML</title>
</head>
<body>
    <h1>Apresentação da Pessoa</h1>
    <p>
        <?php echo $pessoa->apresentar(); ?>
        <br>
        <?php echo $pessoa1->apresentar(); ?>
    </p>
</body>
</html>
