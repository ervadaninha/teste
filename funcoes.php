<?php

#expressão 1
echo "<br><br>";
echo "Sistema de Notas: Excepcional, Aprovado, e Reprovado: ";
echo "<br><br>";
$nota = 5;
$nota1 = 3;
$nota2 = 2;

$media = ($nota + $nota1 + $nota2) / 3;

 printf('Média %d: ', $media);

 if($media >= 7){
 	echo "Excepcional";
 } elseif ($media >= 4) {
 	echo "Aprovado";
 } else {
 	echo "Reprovado";
 }
echo "<br><br>";

#expressão 2
echo "<br><br>";
echo "Sistema de Calculo entre números: ";
echo "<br><br>";

$inicio = 20;
$fim = 35;
$soma = 0;

for ($i = $inicio; $i < $fim; $i++) { 
	
	$soma = $soma + $i;
}

printf('A soma dos números entre %d + %d  é: %d', $inicio, $fim, $soma);
echo "<br><br>";

#expressão 3
echo "<br><br>";
echo "Sistema de formatação de números para R$: ";
echo "<br><br>";

function arrouba($valor)
{
	return "R$ " . number_format($valor,2,","," . ");
}

echo arrouba(252468251);
echo "<br><br>";

#expressão 4
echo "<br><br>";
echo "Usando função STRTR: ";
echo "<br><br>";

$animal = 'Animal 123415 é sensacional';

echo strtr($animal, '123415', 'ingrid');
echo "<br><br>";

#expressão 5
echo "<br><br>";
echo "Usando SUBSTR(): ";
echo "<br><br>";

$alfabeto = 'abcdefghijklmnopqrstuvxwyz';

var_dump(substr($alfabeto, 2,5));
echo "<br><br>";

#expressão 6
echo "<br><br>";
echo "Usando array com shuffle: ";
echo "<br><br>";

$array = array("Miss Fortune", "Gnar", "Blitz", "Kai sa", "Rakan", "Tristana");

shuffle($array);
print_r($array);