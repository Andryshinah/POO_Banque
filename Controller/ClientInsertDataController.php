<?php
namespace App\Controller;

use App\Controller\Controller;
use App\Model\ClientInsert;
use App\Model\ClientInsertModel;

class ClientInsertDataController extends Controller
{
    
    public $tab=array();
    public function Index()
    {
        $Data=new ClientInsertModel;
        $this->setNom($_POST['Nom']);
        $Nom=$this->getNom();
        $this->setNumCompte($_POST['NumCompte']);
        $NumCompte=$this->getNumCompte();
        $Data->Insert($Nom,$NumCompte,$NumCompte);
        $this->render('Accueil.view'); 
        
    }
}

    ?>