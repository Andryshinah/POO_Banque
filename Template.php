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
    <?=$content?>
<body class='bg-success'>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href=<?='Index';?>>Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href=<?='ClientList';?>>Espace Client</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>
<div class="card bg-secondary mb-3 " style="max-width: 20rem;margin: 111px 100px 100px 625px;">
  <div class="card-header"><h4 class="card-title">Votre compte</h4> </div>
  <div class="card-body">
    <form method='POST' action='ClientID'>
    <p class="card-text">
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Nom</label>
        <input type="text" name="Nom" class="form-control" >
    </div>
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Numero de Compte</label>
        <input type="text" name="NumCompte" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary" name='submit' style= "margin: 5% 10% 10% 34%;">Submit</button>
    <a href='ClientInsert' class="btn btn-primary" style= "margin: 1% 10% 10% 24%;">Creer un Compte</a>
</form>
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
    <?=$content?>
<body class='bg-success'>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href=<?='Index';?>>Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href=<?='ClientList';?>>Espace Client</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>
<div class="card bg-secondary mb-3 " style="max-width: 20rem;margin: 111px 100px 100px 625px;">
  <div class="card-header"><h4 class="card-title">Votre compte</h4> </div>
  <div class="card-body">
    <form method='POST' action='ClientID'>
    <p class="card-text">
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Nom</label>
        <input type="text" name="Nom" class="form-control" >
    </div>
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Numero de Compte</label>
        <input type="text" name="NumCompte" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary" name='submit' style= "margin: 5% 10% 10% 34%;">Submit</button>
    <a href='ClientInsert' class="btn btn-primary" style= "margin: 1% 10% 10% 24%;">Creer un Compte</a>
</form>
</body>
>>>>>>> origin/Andryshinah-Branche-2
</html>