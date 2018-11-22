<?php
/**
 * Created by PhpStorm.
 * User: groune mohamed
 * Date: 21/11/2018
 * Time: 15:59
 */

class Voiture extends Vehicule


{
    private $nombreDePorte ;
    private $taxeApayer ;

    /**
     * @return mixed
     */
    public function getTaxeApayer()
    {
        return $this->taxeApayer;
    }

    /**
     * @param mixed $taxeApayer
     */
    public function setTaxeApayer($taxeApayer) : void
    {
        $this->taxeApayer = $taxeApayer;
    }

    /**
     * @return mixed
     */
    public function getNombreDePorte()
    {
        return $this->nombreDePorte;
    }

    /**
     * @param mixed $nombreDePorte
     */
    public function setNombreDePorte($nombreDePorte): void
    {
        $this->nombreDePorte = $nombreDePorte;
    }

    public function __construct($nombreDePorte,$marque,$dateDachat,$prixDachat,$prixCourant ,$taxeApayer)
    {
        parent::__construct($marque,$dateDachat,$prixDachat,$prixCourant,$taxeApayer);
        $this->taxeApayer=$prixCourant*5/100 ;
        $this->nombreDePorte= $nombreDePorte;
    }

    public function __destruct()
    {
       echo " detruction de Voiture ";
    }

    public function deplacement()
    {
        echo "deplacement d une voiture <br>";
    }
    public function affichage()
    {
        echo "Marque :$this->marque <br> Date d achata : ,$this->dateDachat<br> Prix d achat :$this->prixDachat<br> Prix courant :$this->prixCourant<br> Nombre de ports : $this->nombreDePorte<br> Taxe a payer : $this->taxeApayer ";
    }
}