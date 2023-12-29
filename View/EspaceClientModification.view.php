<?php

use App\Repository\Session;
ob_start();
$sessionNom=new Session;
$sessionNumCompte=new Session;
?>
<div class="card bg-secondary mb-3 " style="max-width: 20rem;margin: 70px 100px 100px 458px;">
  <div class="card-header"><h4 class="card-title">Votre compte</h4> </div>
  <div class="card-body">
    <form method='POST' action='ClientUpdate'>
    <p class="card-text">
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Nom</label>
        <input type="text" name="NewNom" class="form-control" value="<?=$sessionNom->getSession('Nom');?>">
    </div>
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Votre Numero</label>
        <input type="text" name="NewNumCompte" class="form-control" value="<?=$sessionNom->getSession('NumCompte') ?>" readonly=''>
    </div>
   <div> <button type="submit" class="btn btn-info" name='submit' style= "    margin: 5% 13% 10% 45%;width: 41%;">Sauvegarder Changement</button>
   </div>
</form>

<?php
$content=ob_get_clean();
require '../TemplateClientUpdate.php';
?>