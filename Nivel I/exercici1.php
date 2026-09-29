<?php

class Empleat {

    private string $nom;
    private float $sou;

    // constructor

    public function __construct(string $nom, float $sou)
    {
        $this->nom = $nom;
        $this->sou = $sou;
    }


    // método para mostrar nombre y decir si paga impuestos

    public function mostrarInformacion(): void {
        echo "Nom: " . $this->nom;


        if ($this->sou > 6000){
            echo ": Te toca pagar impuestos";
        } else{
            echo ": No pagas";
        }
    }

}

/* creamos empleado para ver si funciona */
$empleat1 = new Empleat("Jordi", 7000);

$empleat1->mostrarInformacion();
?>