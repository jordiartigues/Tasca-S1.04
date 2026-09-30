<?php

//clase poker describe como es y que puede hacer un dado
class PokerDice{


//Cada objeto PokerDice tendrá una propiedad llamada $figura, que guardará un texto
private string $figura;


//creamos funcion tirar (accion q puede hacer el dado)
//es void pq no devuelve resultado, solo modifica el propio dado
public function tirarDado(): void{

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

}

?>