<?php

#principal#
$e = 7;
$f = 9;

#expressão 1
echo "Usando 7 != 9: ";
echo "<br><br>";
$gato = $e != $f;

var_dump($gato);
echo "<br><br>";

#expressão 2
echo "<br><br>";
echo "Usando 7 === 9: ";
echo "<br><br>";
$coelho = $e === $f;

var_dump($coelho);
echo "<br><br>";

#expressão 3
echo "<br><br>";
echo "Usando 7 / 9: ";
echo "<br><br>";
$rato = $e / $f;

var_dump($rato);
echo "<br><br>";

#expressão 4
echo "<br><br>";
echo "Usando 7 + 9: ";
echo "<br><br>";
$girrafa = $e + $f;

var_dump($girrafa);
echo "<br><br>";

#expressão 5
echo "<br><br>";
echo "Usando 7 - 9: ";
echo "<br><br>";
$elefante = $e - $f;

var_dump($elefante);
echo "<br><br>";

#expressão 6
echo "<br><br>";
echo "Usando 7 * 9: ";
echo "<br><br>";
$papagaio = $e * $f;

var_dump($papagaio);
echo "<br><br>";

#expressão 7
echo "<br><br>";
echo "Usando 7 % 9: ";
echo "<br><br>";
$sapo = $e % $f;

var_dump($sapo);
echo "<br><br>";

#expressão 8
echo "<br><br>";
echo "Usando 7 + (-9) : ";
echo "<br><br>";
$raposa = $e + (-$f);

var_dump($raposa);
echo "<br><br>";

#expressão 9
echo "<br><br>";
echo "Usando -7 - 9 : ";
echo "<br><br>";
$tucano = -$e - $f;

var_dump($tucano);
echo "<br><br>";

#expressão 10
echo "<br><br>";
echo "Usando 7 = (9 - 2) + 3 : ";
echo "<br><br>";
$e = ($f - 2) + 3;

var_dump($e);
echo "<br><br>";

#expressão 11
echo "<br><br>";
echo "Usando 8 += 3: ";
echo "<br><br>";
$g = 8;
$g += 3;

var_dump($g);
echo "<br><br>";

#expressão 12
echo "<br><br>";
echo "Usando 7 -= 4: ";
echo "<br><br>";
$e -= 4;

var_dump($e);
echo "<br><br>";

#expressão 13
echo "<br><br>";
echo "Usando 9 *= 3: ";
echo "<br><br>";
$h = 9;
$h *= 3;

var_dump($h);
echo "<br><br>";

#expressão 14
echo "<br><br>";
echo "Usando 10 /= 2: ";
echo "<br><br>";
$i = 10;
$i /= 2;

var_dump($i);
echo "<br><br>";

#expressão 15
echo "<br><br>";
echo "Usando 7 %= 2: ";
echo "<br><br>";
$j = 7;
$j %= 2;

var_dump($j);
echo "<br><br>";

#expressão 16
echo "<br><br>";
echo "Usando Boneca .= Autonoma: ";
echo "<br><br>";
$k = "Boneca ";
$l = "Autonoma"; 

var_dump($k .= $l);
echo "<br><br>";

#expressão 17
echo "<br><br>";
echo "Usando  7 == 2: ";
echo "<br><br>";
$m = 7;
$n = 2;

var_dump($m == $n);
echo "<br><br>";

#expressão 18
echo "<br><br>";
echo "Usando 5 === arroz: ";
echo "<br><br>";
$o = 5;
$p = "arroz";

var_dump($o === $p);
echo "<br><br>";

#expressão 19
echo "<br><br>";
echo "Usando 5 != 3 e 5 <> 3: ";
echo "<br><br>";
$q = 5;
$r = 3;

var_dump($q != $r);
echo "<br><br>";
var_dump($q <> $r);
echo "<br><br>";

#expressão 20
echo "<br><br>";
echo "Usando arroz !== arroz: ";
echo "<br><br>";
$s = "arroz";
$t = "arroz";

var_dump($s !== $t);
echo "<br><br>";

#expressão 21
echo "<br><br>";
echo "Usando arroz !== true: ";
echo "<br><br>";
$ab = "arroz";
$ac = true;

var_dump($ab !== $ac);
echo "<br><br>";

#expressão 22
echo "<br><br>";
echo "Usando arroz > 3: ";
echo "<br><br>";
$ad = "arroz";
$ae = 3;

var_dump($ad > $ae);
echo "<br><br>";

#expressão 23
echo "<br><br>";
echo "Usando 5 > 2: ";
echo "<br><br>";
$af = 5;
$ag = 2;

var_dump($af > $ag);
echo "<br><br>";

#expressão 24
echo "<br><br>";
echo "Usando 80 < 45: ";
echo "<br><br>";
$ah = 80;
$aj = 45;

var_dump($ah < $aj);
echo "<br><br>";

#expressão 25
echo "<br><br>";
echo "Usando arroz <= gatos: ";
echo "<br><br>";
$ak = "arroz";
$al = "gatos";

var_dump($ak <= $al);
echo "<br><br>";

#expressão 26
echo "<br><br>";
echo "Usando 8 => arroz: ";
echo "<br><br>";
$am = 8;
$an = "arroz";

var_dump($am >= $an);
echo "<br><br>";

#expressão 27
echo "<br><br>";
echo "Usando [] < 8  e [] > 8  e [] <= 8: ";
echo "<br><br>";
$ao = [];
$ap = 8;

var_dump($ao < $ap);
echo "<br><br>";

var_dump($ao > $ap);
echo "<br><br>";

var_dump($ao <= $ap);
echo "<br><br>";

#expressão 28
echo "<br><br>";
echo "Usando 3 <= 2.6: ";
echo "<br><br>";
$ar = 3;
$as = 2.6;

var_dump($ar <= $as); 
echo "<br><br>";

#expressão 29
echo "<br><br>";
echo "Usando 20 ** 2: ";
echo "<br><br>";
$fa = 20;
$fb = 2;

var_dump($fa ** $fb);
echo "<br><br>";

#expressão 30
echo "<br><br>";
echo "Somente com true e false: ";
echo "<br><br>";
$ba = true;
$bb = false;
$bc = true;
$bd = false;

echo "True && false: ";
var_dump($ba && $bb); #false 
echo "<br><br>";

echo "True && true: ";
var_dump($ba && $bc); #true
echo "<br><br>";

echo "False && false: ";
var_dump($bb && $bd); #false
#Será verdadeiro, somente se, os dois forem verdadeiros.
echo "<br><br>";
echo "<br><br>";

echo "True || false: ";
var_dump($ba || $bb); #true
echo "<br><br>";

echo "True || true: ";
var_dump($ba || $bc); #true
echo "<br><br>";

echo "False || false: ";
var_dump($bb || $bd); #false
#Será verdadeiro, toda vez que existir um true.
echo "<br><br>";
echo "<br><br>";

echo "!true: ";
var_dump(!$ba); #false
echo "<br><br>";

echo "!false: ";
var_dump(!$bb); #true
#Será verdadeiro, quando a expressão for falsa.
echo "<br><br>";
echo "<br><br>";

echo "True XOR false: ";
var_dump($ba XOR $bb); #true
echo "<br><br>";

echo "True XOR true: ";
var_dump($ba XOR $bc); #false
echo "<br><br>";

echo "False XOR false: ";
var_dump($bb XOR $bd); #false
echo "<br><br>";

echo "False XOR true: ";
var_dump($bb XOR $ba); #true
#Será verdadeiro, quando existir um true
echo "<br><br>";

#expressão 31
echo "<br><br>";
echo "Usando string, array, boolean, e number: ";
echo "<br><br>";
$ca = "arroz";
$cb = true;
$cc = false;
$cd = NULL;
$ce = 5;	
$cf = [];
$cg = "";

echo "Arroz && 5: ";
var_dump($ca && $ce); #true - Pois os dois são verdadeiros
echo "<br><br>";

echo "Arroz && true: ";
var_dump($ca && $cb); #true - Pois os dois são verdadeiros
echo "<br><br>";

echo "True && null: ";
var_dump($ca && $cd); #false - Pois $cd é nulo, por tanto os dois não são verdadeiros, assim tornando a expressão falsa.
echo "<br><br>";

echo "5 && []: ";
var_dump($ce && $cf); #false - Pois $cf esta vazio, desta forma tornando o array false, por tanto os dois não são verdadeiros, assim tornando a expressão falsa.
echo "<br><br>";

echo "String vazia && true: ";
var_dump($cg && $cb); #false - Pois $cg é nulo, por estar vazio, por tanto os dois não são verdadeiros, assim tornando a expressão falsa.
echo "<br><br>";
echo "<br><br>";

echo "Arroz || []: ";
var_dump($ca || $cf); #true
echo "<br><br>";

echo "Null || 5: ";
var_dump($cd || $ce); #true
echo "<br><br>";

echo "[] || string vazia: ";
var_dump($cf || $cg); #false
echo "<br><br>";

echo "[] || []: ";
var_dump($cf || $cf); #false
echo "<br><br>";
echo "<br><br>";

echo "!null: ";
var_dump(!$cd); #true - ! esta perguntando se é falso, no caso $cd é falso, portanto a pergunta é verdadeira.
echo "<br><br>";

echo "!arroz: ";
var_dump(!$ca); #false - $ca é true, o torna false.
echo "<br><br>";

echo "!string vazia: ";
var_dump(!$cg); #true 
echo "<br><br>";
echo "<br><br>";

echo "Arroz XOR false: ";
var_dump($ca XOR $cc); #true
echo "<br><br>";

echo "[] XOR 5: ";
var_dump($cf XOR $ce); #true
echo "<br><br>";

echo "String vazia XOR 5: ";
var_dump($cg XOR $cd); #false
echo "<br><br>";

echo "[] XOR null: ";
var_dump($cc XOR $cf); #false
echo "<br><br>";

#expressão 32
echo "<br><br>";
echo "Usando increment e decrement: ";
echo "<br><br>";
$da = 5;
$db = 15;
$dc = 7;

echo "Adição A: " . $da++;
var_dump($da);
echo "<br><br>";

echo "Subtração B: " . $db--;
var_dump($db);
echo "<br><br>";

echo "Adição B: " . $db++;
var_dump($db);
echo "<br><br>";

echo "Subtração C: " . $dc--;
var_dump($dc);
echo "<br><br>";

echo "Subtração C: " . $dc--;
var_dump($dc);
echo "<br><br>";

echo "Subtração C: " . $dc--;
var_dump($dc);
echo "<br><br>";

echo "Adição C: " . $dc++;
var_dump($dc);
echo "<br><br>";

#expressão 33
echo "<br><br>";
echo "Usando [1,2,3] == [1,3,2]: ";
echo "<br><br>";
$ga = array(1,2,3);
$gb = array(1,3,2);

var_dump($ga == $gb); #false
echo "<br><br>";

#expressão 34
echo "<br><br>";
echo "Usando [3,5,2] === [3,5,2] : ";
echo "<br><br>";
$gc = array(3,5,2);
$gd = array(3,5,2);

var_dump($gc === $gd); #true
echo "<br><br>";

#expressão 35
echo "<br><br>";
echo "Usando [1,3,2] != [1,4,2]: ";
echo "<br><br>";
$gf = array(1,3,2);
$gh = array(1,4,2);

var_dump($gf != $gh); #true
echo "<br><br>";

#expressão 36
echo "<br><br>";
echo "Usando !== : ";
echo "<br><br>";
$gi = array(1,34,5);
$gj = array(2,3,56);

var_dump($gi !== $gj); #true - Pois seus tipos não são iguais
echo "<br><br>";

#expressão 37
echo "<br><br>";
echo "Usando < : ";
echo "<br><br>";
$gk = array(2,3,4);
$gl = array(3,4,5);

var_dump($gk < $gl); #true
echo "<br><br>";

#expressão 38
echo "<br><br>";
echo "Usando <= : ";
echo "<br><br>";
$gm = array(3,4,e);
$gn = array(3,4,e);

var_dump($gm <= $gn); #true
echo "<br><br>";

#expressão 39
echo "<br><br>";
echo "Usando > : ";
echo "<br><br>";
$go = array(3,4,5);
$gp = array(4,5,6);

var_dump($go > $gp); #false
echo "<br><br>";

#expressão 40
echo "<br><br>";
echo "Usando >= : ";
echo "<br><br>";
$gq = array(-1,4,54);
$gr = array(2,3,5);

var_dump($gq >= $gr); #false - Pois o primeiro número da segunda array é maior que da primeira.
echo "<br><br>";