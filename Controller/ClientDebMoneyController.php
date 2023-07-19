<?php
namespace App\Controller;

use App\Model\ClientDebMoneyModel;
use App\Repository\Session;

class ClientDebMoneyController extends Controller
{
    
    public $tab=array();
    public function Index()
    {
        $Data=new ClientDebMoneyModel;
        $sessionNumCompte=new Session;
        $Data->DebMoney($_POST['NewSomme'],$sessionNumCompte->getSession('NumCompte'));
        $this->render('Accueil.view');
        
    }
}
?>