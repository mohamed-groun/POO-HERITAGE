<?php

class Avion extends  Vehicule
{
    private $nombreDeMoteur ;

    /**
     * Avion constructor.
     * @param $nombreDeMoteur
     */


    /**
     * @return mixed
     */
    public function getNombreDeMoteur()
    {
        return $this->nombreDeMoteur;
    }

    /**
     * @param mixed $nombreDeMoteur
     */
    public function setNombreDeMoteur($nombreDeMoteur): void
    {
        $this->nombreDeMoteur = $nombreDeMoteur;
    }

    public function __construct($marque,$dateDachat,$prixDachat,$prixCourant, $nombreDeMoteur)
    {
        parent::__construct($marque,$dateDachat,$prixDachat,$prixCourant,$nombreDeMoteur);
        $this->nombreDeMoteur = $nombreDeMoteur;
    }

    public function __destruct()
    {
        echo " detruction d Avion <br> ";
    }



    public function deplacement()
    {
        echo "deplacement d une Avion <br>";
    }

    public function affichage()
    {
        echo "Marque :$this->marque <br> Date d achata : ,$this->dateDachat<br> Prix d achat :$this->prixDachat<br> Prix courant :$this->prixCourant<br> Nombre de Moteurs : $this->nombreDeMoteur<br>";
    }
}