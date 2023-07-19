<?php
namespace App\Model;

use App\Model\Model;

class ClientInsertModel extends Model
{
    private $reqExecute;
    
    public function Insert($Name,$NumCompte,$Somme)
    {
        $this->reqExecute=$this->requete(("INSERT INTO `solde_compte`(`id`, `Nom`, `Numero de compte`, `Somme`) VALUES (Null,?,?,?)"),array($Name,$NumCompte,$Somme));
        return $this->reqExecute;
    }
    
}

?>