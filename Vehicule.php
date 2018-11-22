<?php
/**
 * Created by PhpStorm.
 * User: groune mohamed
 * Date: 21/11/2018
 * Time: 13:47
 */

abstract class Vehicule
{
    protected $marque;
    protected $dateDachat;
    protected $prixDachat;
    protected $prixCourant;
    abstract protected  function  deplacement();

    /**
     * Vehicule constructor.
     * @param $marque
     * @param $dateDachat
     * @param $prixDachat
     * @param $prixCourant
     */
    public function __construct($marque, $dateDachat, $prixDachat, $prixCourant)
    {
        $this->marque = $marque;
        $this->dateDachat = $dateDachat;
        $this->prixDachat = $prixDachat;
        $this->prixCourant = $prixCourant;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getDateDachat()
    {
        return $this->dateDachat;
    }

    /**
     * @param mixed $dateDachat
     */
    public function setDateDachat($dateDachat)
    {
        $this->dateDachat = $dateDachat;
    }

    /**
     * @return mixed
     */
    public function getPrixDachat()
    {
        return $this->prixDachat;
    }

    /**
     * @param mixed $prixDachat
     */
    public function setPrixDachat($prixDachat)
    {
        $this->prixDachat = $prixDachat;
    }

    /**
     * @return mixed
     */
    public function getPrixCourant()
    {
        return $this->prixCourant;
    }

    /**
     * @param mixed $prixCourant
     */
    public function setPrixCourant($prixCourant)
    {
        $this->prixCourant = $prixCourant;
    }

    public function affichage()
    {
        echo "$this->marque ,$this->dateDachat,$this->prixDachat,$this->prixCourant";
    }

}


