<?php
namespace App\Controller;

use App\Controller\Controller;
use App\Model\ClientDeleteModel;
use App\Repository\Session;

class ClientDeleteController extends Controller
{
    
    public $tab=array();
    public function Index()
    {
        $Data=new ClientDeleteModel;
        $sessionNumCompte=new Session;
        $Data->Delete($sessionNumCompte->getSession('NumCompte'));
        $this->render('Accueil.view');
     
      
    }
}

    ?>