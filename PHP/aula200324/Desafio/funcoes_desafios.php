<?php
// Função para verificar aceitação do desafio 1
function verificarAceitacao($nome, $sexo, $idade) {
   //código aqui
   if ($sexo == "feminino") {
      if ($idade < 25) {
         return " $nome voce foi aceita";
      } else {
         return "$nome voce nao tem idade superior a 25";
      }
   } else {
      return " $nome voce nao é mulher";
   }
}

// Função para ordenar números do desafio 2
function ordenarNumeros($num1, $num2, $num3) {
   $lista = array($num1, $num2, $num3);
   sort($lista, SORT_NATURAL);
   return implode(", ",$lista);
}

// Função para calcular média do desafio 3
function calcularMediaAluno($nota1, $nota2, $nota3) {
   $soma = $nota1+$nota2+$nota3;
   $media = $soma/3;
   return "Media = ".$media;
}
?>
