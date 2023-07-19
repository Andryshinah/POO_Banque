<<<<<<< HEAD
<?php
namespace App;

class Autoloader
{
    
    static function Register()
    {
        spl_autoload_register([
                __CLASS__,
                'autoload'  
            ]);
    }
    static function autoload($class)
    {
        $class=str_replace(__NAMESPACE__.'\\','',$class);
        $class=str_replace("\\",'/',$class);
        $fichier= __DIR__.'/'.$class.'.php';
        if(file_exists($fichier))
        {
            require $fichier;
        }
        else
        {
            echo " file doesn't exist";
        }
      
    }
}



=======
<?php
namespace App;

class Autoloader
{
    
    static function Register()
    {
        spl_autoload_register([
                __CLASS__,
                'autoload'  
            ]);
    }
    static function autoload($class)
    {
        $class=str_replace(__NAMESPACE__.'\\','',$class);
        $class=str_replace("\\",'/',$class);
        $fichier= __DIR__.'/'.$class.'.php';
        if(file_exists($fichier))
        {
            require $fichier;
        }
        else
        {
            echo " file doesn't exist";
        }
      
    }
}



>>>>>>> origin/Andryshinah-Branche-2
?>