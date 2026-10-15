<?php

class PokerDice
{

    private string $figura; //mejor llamar algo mas representativo (resultadodado)
    private static int $tiradas = 0;
 

    public function tirarDado(): void //basta con "tirar"
    {


        self::$tiradas++;
        $figuras = ["As", "K", "Q", "J", "7", "8"]; //deberia ser una constante 
        $this->figura = $figuras[rand(0, 5)];
    }

    public function mostrarFigura(): string
    {
        return $this->figura;
    }

    public static function mostrarTiradas(): int
    {
        return self::$tiradas;
    }
}
