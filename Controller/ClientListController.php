<?php
namespace App\Controller;

use App\Model\Model;

use App\Model\ClientModel;


class ClientListController extends Controller
{
    public $tab=array();
    public function Index()
    {
        $info=new ClientModel();
        $this->tab=$info->findAll(); 
        //foronina ity fonction ty
        $this->render('EspaceClient.view',$this->tab); 
    }
    
 
}
// ['Tab'=>$this->tab] talohan'ny nampiasaina ilay function compact natao associatif fotsiny!
?>