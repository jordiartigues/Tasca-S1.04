<?php

//para utilizar clase de poker dice, que esta en ese archivo
require_once 'PokerDice.php';

//creamos un dado. PokerDice es el molde, dau es el objeto creado a a partir de ese molde
$dau = new PokerDice();

//tiramos dado. dado ejectura el metodo tirarDado()

$dau->tirarDado(); //(dado dau, ejecuta la funcion tirardado, dentro de ese metodo ocurre this-figura=figuras[rand0,5]


//mostramos resultado

echo "Ha sortit: " . $dau->mostrarFigura();


?>