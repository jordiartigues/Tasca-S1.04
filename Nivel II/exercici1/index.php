<?php

//para utilizar clase de poker dice, que esta en ese archivo
require_once 'PokerDice.php';

//creamos 5 dados,no necesitamos constructor porque PokerDice no recibe parametros


$dau1 = new PokerDice();
$dau2 = new PokerDice();
$dau3 = new PokerDice();
$dau4 = new PokerDice();
$dau5 = new PokerDice();

//tiramos dado. dado ejectura el metodo tirarDado()

$dau1->tirarDado(); //(dado dau, ejecuta la funcion tirardado, dentro de ese metodo ocurre this-figura=figuras[rand0,5]
$dau2->tirarDado();
$dau3->tirarDado();
$dau4->tirarDado();
$dau5->tirarDado();

//mostramos resultado
//cada dado guarda su propio resultado dentro de su figura
echo "Dau 1: " . $dau1->mostrarFigura() . "\n";
echo "Dau 2: " . $dau2->mostrarFigura() . "\n";
echo "Dau 3: " . $dau3->mostrarFigura() . "\n";
echo "Dau 4: " . $dau4->mostrarFigura() . "\n";
echo "Dau 5: " . $dau5->mostrarFigura() . "\n";


?>