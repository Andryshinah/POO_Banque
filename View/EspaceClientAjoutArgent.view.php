<?php
use App\Repository\Session;
ob_start();
$sessionNom=new Session;
$sessionNumCompte=new Session;
?>

<?php
$content=ob_get_clean();
require '../TemplateClientAddMoney.php';
?>