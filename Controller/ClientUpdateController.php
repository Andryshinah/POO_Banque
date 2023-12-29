<?php
namespace App\Controller;

use App\Controller\Controller;
use App\Model\ClientUpdateModel;

class ClientUpdateController extends Controller
{
    
    public $tab=array();
    public function Index()
    {
        $Data=new ClientUpdateModel;
        $this->setNom($_POST['NewNom']);
        $Nom=$this->getNom();
        $this->setNumCompte($_POST['NewNumCompte']);
        $NumCompte=$this->getNumCompte();
        $Data->Update($Nom,$NumCompte,0);
        $this->render('Accueil.view'); 
    }
}
?>