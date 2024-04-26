<?php

// Matriz de filmes e gêneros
$filmes_e_generos = array(
    array("filme" => "Interestelar", "genero" => "Ficção Científica"),
    array("filme" => "O Poderoso Chefão", "genero" => "Drama"),
    array("filme" => "Vingadores: Ultimato", "genero" => "Ação"),
    array("filme" => "Cidade de Deus", "genero" => "Drama"),
    array("filme" => "Matrix", "genero" => "Ficção Científica"),
    array("filme" => "O Senhor dos Anéis: A Sociedade do Anel", "genero" => "Fantasia"),
    array("filme" => "O Lobo de Wall Street", "genero" => "Drama"),
    array("filme" => "Batman: O Cavaleiro das Trevas", "genero" => "Ação"),
    array("filme" => "A Origem", "genero" => "Ficção Científica"),
    array("filme" => "Clube da Luta", "genero" => "Drama")
);

// Contagem de gêneros
foreach ($filmes_e_generos as $TodosOsfilmes) {
     echo "<li>" .$TodosOsfilmes["genero"]." ".$TodosOsfilmes["filme"]."</li>";
}

echo "<br>";

echo "Filmes do gênero Ficção Científica";
echo "<ol>";
foreach ($filmes_e_generos as $filme) {
    if ($filme['genero'] == "Ficção Científica") {
        echo "<li>". $filme["filme"]."</li>";
    }
}
echo "</ol>";
?>
