<?php
namespace App\Controller;

use App\Controller\Controller;

use App\Model\ClientModel;
use App\Model\ClientUpdateModel;
use App\Repository\Session;

class ClientUpdateFormController extends Controller
{
    
    public $tab=array();
    public $session;
    public $table;
   public function __construct()
   {
    $this->session=new Session;
   }
    public function Index()
    {
        //misy probleme session eto mila jerena
       $this->render('EspaceClientModification.view',);  
    }
}

    ?>