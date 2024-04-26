<?php
// Array de alunos
$alunos = array("João", "Pedro", "Lucas");
echo "<strong>Alunos</strong>"."<br>";
print_r($alunos);
echo "<br>";

// Array de alunas
$alunas = array("Maria", "Ana", "Carla");
echo "<strong>Alunas</strong>"."<br>";
print_r($alunas);
echo "<br>";

// Mesclar os dois arrays
$alunos_e_alunas = array_merge($alunos, $alunas);
echo "<strong>Mesclagem</strong>"."<br>";
// Exibir o array resultante
print_r($alunos_e_alunas);
?>
