<?php

include "compteBancaire.php";
include "titulaire.php";

$titulaire = new Titulaire("Veltz", "Ivan", "1991-07-26", "Mulhouse");
$compte1 = new CompteBancaire("Compte courant", 100, "€", $titulaire);
$compte2 = new CompteBancaire("Livret A", 400, "€", $titulaire);
echo $titulaire->infosTitulaire();
$compte2->virement(100, $compte1);
echo $titulaire->infosTitulaire();