<?php
namespace App\Controller;

use App\Controller\Controller;
use App\Model\ClientAddMoneyModel;
use App\Model\ClientDebMoneyModel;
use App\Model\ClientDeleteModel;
use App\Repository\Session;

class ClientAddMoneyController extends Controller
{
    
    public $tab=array();
    public function Index()
    {
        $Data=new ClientAddMoneyModel;
        $sessionNumCompte=new Session;
        $Data->AddMoney($_POST['NewSomme'],$sessionNumCompte->getSession('NumCompte'));
        $this->render('Accueil.view');
        
    }
}



    ?>