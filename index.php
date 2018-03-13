<?php

$x = 1;
	
	while ($x < 20) {
		$x++;
		echo $x . "</br>";
	}

$y = 1;

while ($y < 20):
	echo $y . "</br>";
	$y++;
endwhile;


$z = 1;

do {
	echo "Achooou!!!" . "</br>";
} while ($z > 3);


for($w = 1; $w < 20; $w++);
	echo $w . "</br>";

for($a = 1; ; $a++){
	if($a > 10){
		break;
	}
	echo $a . "</br>";
}


$b = 1;

for(; ;){
	if($b > 10){
		break;
	}
	echo $b . "</br>";
	$b++;
}

for($q = 1, $e = 8, $r = 9; $q < 10; $q++, $e++, $r++){

	echo "A: " . $q . "</br>";
	echo "B: " . $e . "</br>";
	echo "C: " . $r . "</br>";
}


$lol = ["Miss Fortune", "Tristana", "Blitz", "Gnar"];

	foreach ($lol as $char) {
		echo "Main: " . $char . "</br>";
	}


$leagueoflegends =[

	'Main 1' => 'Miss Fortune',
	'Main 2' => 'Tristana',
	'Main 3' => 'Blitz',
	'Main 4' => 'Gnar'
];

	foreach ($leagueoflegends as $lolzinho => $personagem) {
		echo $lolzinho . ": " . $personagem . "</br></br>"; 
	}



$jogadores = [

	'Ingrid' => [
		'User' => 'Nikita',
		'Main' => 'Miss Fortune'
	],

	'Fabio' => [
		'User' => 'Tachica',
		'Main' => 'Lee sin'
	],

	'Lucas' => [
		'User' => 'Bisavô Careca',
		'Main' => 'Ekko'
	],
];

	foreach ($jogadores as $players => $dados) {
		echo "Nome: " . $players . "</br>";

		foreach ($dados as $item => $value) {
		echo $item . ": " . $value . "</br>";	

		}

	}


$valor = 1;

switch ($valor) {
	case 1:
	case 2:
		echo "1 ou 2";
		break;
	default: 
		echo "Porra carai num incontrei";
		break;
}