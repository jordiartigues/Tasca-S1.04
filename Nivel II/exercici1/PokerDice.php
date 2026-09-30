<?php

//clase poker describe como es y que puede hacer un dado
class PokerDice{


//Cada objeto PokerDice tendrá una propiedad llamada $figura, que guardará un texto

//es private porque esta propiedad se puede utilizar dentro de la propia clase, no queremos q se pueda modificar desde fuera directamente
private string $figura;

//creamos contador comun a todos los dados
//ponemos static porque esta variable pertenece a la clase en conjunto, no a cada objeto individual. asi contara las tiradas en total del conjunto de dados que tengamos
private static int $tiradas = 0;


//creamos funcion tirar (accion q puede hacer el dado)
//es void pq no devuelve resultado, solo modifica el propio dado
public function tirarDado(): void{


//aumenta en 1 la variable tiradas que pertenece a clase pokerdice, lo usamos para acceder a un propiedad static. con el this es el dado en concreto, con el self es la clase pokerdice en total
self::$tiradas++;

//creamos lista con resultados posibles del dado
$figuras = ["As", "K", "Q", "J", "7", "8"];


//this significa "el objecto actual"
//$figura sera el resultado del rand de la lista que hemos hecho
//queremos escoger posicion aleatoria (usando los indices)
//rand(0, 5)
$this->figura = $figuras[rand (0, 5)];
}


//creamos metodo que devuelva la figura que ha salido

public function mostrarFigura(): string{
    return $this->figura;
}

public static function mostrarTiradas(): int {
    return self::$tiradas;
}

}

?>