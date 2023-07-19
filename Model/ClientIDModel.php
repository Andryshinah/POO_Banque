<?php
namespace App\Model;

use App\Controller\MainController;
use App\Model\Model;
class ClientIDModel extends Model
{
    private $tab=array();
    private $id;
    // private $NumeroCompte;
    public function __construct()
    {
        $this->table='solde_compte';
        
    }
    
    public function find($NumCompte)
    {
        $Info=new ClientModel;
        $data=$Info->findAll();
        $sortieboucle = false;
        foreach($data as $key=>$value)
        {
            if ($data[$key]['Numero de compte']===$NumCompte)
            {
                $sortieboucle= true;
                return $this->requete("SELECT * FROM {$this->table} WHERE `Numero de compte` = {$NumCompte}")->fetch();
            }
        }
        if(!$sortieboucle)
        
        {
            return 'veuiller confirmer votre identité';
        }
    }
 }
    


?>