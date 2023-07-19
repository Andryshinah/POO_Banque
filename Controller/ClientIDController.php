<?php
namespace App\Controller;

use App\Model\ClientIDModel;
use App\Repository\Session;

class ClientIDController extends Controller
{
    
    public $tab=array();
    public function Index()
    {
        $info=new ClientIDModel;
        $sessionNom=new Session;
        $sessionNumCompte=new Session;
        $Nom=$sessionNom->setSession('Nom',$_POST['Nom']);
        $Nom=$sessionNom->getSession('Nom');
        $NumCompte=$sessionNumCompte->setSession('NumCompte',$_POST['NumCompte']);
        $NumCompte=$sessionNumCompte->getSession('NumCompte');
        $this->setNom($_POST['Nom']);
        $this->setNumCompte($_POST['NumCompte']);
        $this->tab=$info->find($this->getNumCompte());
        $this->render('resultatRequete.view');
        // $this->render('EspaceClientModification.view',compact('Client',$this->tab));
    }
    
}

?>