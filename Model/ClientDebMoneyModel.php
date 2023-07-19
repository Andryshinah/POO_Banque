<?php
namespace App\Model;
use App\Model\Model;
use App\Repository\Session;

class ClientDebMoneyModel extends Model
{
    private $req;
    public function DebMoney($Somme,$NumCompte)
    {
        $AncienSomme=new ClientIDModel;
        $session=new Session;
        $SommeActuelle = $AncienSomme->find($session->getSession('NumCompte'));
         $SommeMAJ=$SommeActuelle['Somme'] - $Somme;
        $this->req=$this->requete(("UPDATE `solde_compte` SET `Somme` =? WHERE `solde_compte`.`Numero de compte` =?"),array($SommeMAJ,$NumCompte));
        return ($this->req);
    }
    
}

?>