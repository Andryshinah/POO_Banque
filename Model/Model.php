<?php
namespace App\Model;

use App\Autoloader;
require_once ROOT.'/Autoloader.php';
Autoloader::Register(); 

use App\Core\Database;
Class Model extends Database
{
    protected $table;
    private $req;
    public $db;
    
    public function requete(string $sql, array $attributs= Null)
    {
        
        $this->db = Database::getInstance();
     
            if($attributs !== null)
            {
                return $this->req=$this->db->prepare($sql)->execute($attributs);
                 
            }
            else
            {
                 return $this->req=$this->db->query($sql);
            }
            return $this->req;
      
   
    }
 
   
  

}


?>