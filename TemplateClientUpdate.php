<<<<<<< HEAD
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    
<body class='bg-success'>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
     <div class="container-fluid">
     <a class="navbar-brand" href=<?='Index';?>>Home</a>
    </div>
  </div>
</nav>
<?=$content?>
<div class="card bg-secondary mb-3 " style="max-width: 20rem;margin: 70px 100px 100px 458px;">
  <div class="card-header"><h4 class="card-title">Votre compte</h4> </div>
  <div class="card-body">
    <form method='POST' action='ClientUpdate'>
    <p class="card-text">
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Nom</label>
        <input type="text" name="NewNom" class="form-control" value=<?php echo $sessionNom->getSession('Nom'); ?>>
    </div>
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Votre Numero</label>
        <input type="text" name="NewNumCompte" class="form-control" value=<?php echo $sessionNumCompte->getSession('NumCompte'); ?> readonly=''>
    </div>
   <div> <button type="submit" class="btn btn-info" name='submit' style= "    margin: 5% 13% 10% 45%;width: 41%;">Sauvegarder Changement</button>
   </div>
</form>
<a href="ClientDelete"><button type="submit" class="btn btn-danger" name='submit' style= "margin: -41% 9% 10% 5%;width: 38%;">Supprimer mon profil</button></a>
<a href="ClientMoneyAddForm"><button type="submit" class="btn btn-success" name='submit' style= "margin:-14% 9% 10% 5%;width: 38%;">Ajouter une somme</button></a>
<a href="ClientMoneyDebForm"><button type="submit" class="btn btn-warning" name='submit' style= "margin:-43% 9% 10% 46%;width: 40%;">debiter une somme</button></a>
</body>
=======
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    
<body class='bg-success'>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
     <div class="container-fluid">
     <a class="navbar-brand" href=<?='Index';?>>Home</a>
    </div>
  </div>
</nav>
<?=$content?>
<div class="card bg-secondary mb-3 " style="max-width: 20rem;margin: 70px 100px 100px 458px;">
  <div class="card-header"><h4 class="card-title">Votre compte</h4> </div>
  <div class="card-body">
    <form method='POST' action='ClientUpdate'>
    <p class="card-text">
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Nom</label>
        <input type="text" name="NewNom" class="form-control" value=<?php echo $sessionNom->getSession('Nom'); ?>>
    </div>
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Votre Numero</label>
        <input type="text" name="NewNumCompte" class="form-control" value=<?php echo $sessionNumCompte->getSession('NumCompte'); ?> readonly=''>
    </div>
   <div> <button type="submit" class="btn btn-info" name='submit' style= "    margin: 5% 13% 10% 45%;width: 41%;">Sauvegarder Changement</button>
   </div>
</form>
<a href="ClientDelete"><button type="submit" class="btn btn-danger" name='submit' style= "margin: -41% 9% 10% 5%;width: 38%;">Supprimer mon profil</button></a>
<a href="ClientMoneyAddForm"><button type="submit" class="btn btn-success" name='submit' style= "margin:-14% 9% 10% 5%;width: 38%;">Ajouter une somme</button></a>
<a href="ClientMoneyDebForm"><button type="submit" class="btn btn-warning" name='submit' style= "margin:-43% 9% 10% 46%;width: 40%;">debiter une somme</button></a>
</body>
>>>>>>> origin/Andryshinah-Branche-2
</html>