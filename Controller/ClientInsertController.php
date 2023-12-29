<?php
namespace App\Controller;

use App\Controller\Controller;

class ClientInsertController extends Controller
{
    
    public $tab=array();
    public function Index()
    {
        $this->render('EspaceClientInsert.view'); 
    }
}

    ?>