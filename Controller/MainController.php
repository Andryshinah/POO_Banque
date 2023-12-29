<?php
namespace App\Controller;
use App;

class MainController extends Controller
{
    private $Nomvalidation;
    private $NumCompte;
    public function Index()
    {
        
        include_once ROOT.'/View/Accueil.view.php';
    }
    
   
    
}

?>