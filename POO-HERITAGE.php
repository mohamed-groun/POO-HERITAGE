<?php
include "Vehicule.php";
include "Voiture.php";
include "Avion.php";
$voiture = new Voiture(5,'clio',2010,2000,4564,5);
$avion = new Avion("helicopter", 2009, "$45000" ,"$39000" , 2);
$voiture->deplacement();
$voiture->affichage();
echo "<br><br> ";
$avion->deplacement();
$avion->affichage();
echo "<br> ";
