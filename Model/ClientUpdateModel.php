<?php
namespace App\Model;

use App\Model\Model;

class ClientUpdateModel extends Model
{
    private $reqExecute;
    
    
    public function Update($Name,$NumCompte)
    {
        $this->reqExecute=$this->requete(("UPDATE `solde_compte` SET `Nom` = ? WHERE `solde_compte`.`Numero de compte` = ?"), array($Name,$NumCompte));
        return $this->reqExecute;
    }
    
}

?>