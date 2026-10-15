<?php

class PokerDice
{

    private string $resultadoDado; 
    private static int $tiradas = 0;
    private static array $figuras = ["As", "K", "Q", "J", "7", "8"]; 

    public function tirar(): void 
    {
        self::$tiradas++;
        $this->resultadoDado = self::$figuras[rand(0, 5)];
    }

    public function mostrarResultado(): string
    {
        return $this->resultadoDado;
    }

    public static function mostrarTiradas(): int
    {
        return self::$tiradas;
    }
}
