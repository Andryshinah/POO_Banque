<?php
namespace App\Controller;

abstract class Controller
{
     private $Nom;
     private $NumCompte;

     public function render(string $fichier,array $donnees=[])
     {
        //alaina ilay donné anaty tab
        extract($donnees);
       // eto no migeneré ilay view ary am VIEW
       require_once ROOT.'/View/'.$fichier.'.php';
     }
    public function setNom($Nom)
    {
     $this->Nom=$Nom;
    }
    public function getNom()
    {
      return $this->Nom;
    }
    public function setNumCompte($Num)
    {
     $this->NumCompte=$Num;
    }
    public function getNumCompte()
    {
     return  $this->NumCompte;
    }
}
?>