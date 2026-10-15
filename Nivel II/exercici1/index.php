<?php

require_once 'PokerDice.php';

define('QUATITAT_DAUS', 5);
$daus = [];

for ($i = 0; $i < QUATITAT_DAUS; $i++) {
    $daus[] = new PokerDice();
}

foreach ($daus as $dau) {
    $dau->tirar();
}

foreach ($daus as $i => $dau) {
    echo "Dau " . ($i + 1) .  ": " . $dau->mostrarResultado() . "\n";
}

echo "Total de tiradas: " . PokerDice::mostrarTiradas();
