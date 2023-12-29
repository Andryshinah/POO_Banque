<?php
namespace App\Model;

use App\Model\Model;
class ClientModel extends Model
{
    private $reqExecute;
    public function __construct()
    {
        $this->table='solde_compte';
    }
    
    public function findAll()
    {
        $this->reqExecute=$this->requete('SELECT * FROM '.$this->table);
       return $this->reqExecute->fetchAll();
    }
    
}

?>