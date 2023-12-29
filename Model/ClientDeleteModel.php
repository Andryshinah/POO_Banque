<?php
namespace App\Model;
use App\Model\Model;

class ClientDeleteModel extends Model
{
    private $req;
    public function Delete($NumCompte)
    {
        $this->req=$this->requete(("DELETE FROM `solde_compte` WHERE `solde_compte`.`Numero de compte`=?"),array($NumCompte));
        return ($this->req);
    }
    
}

?>