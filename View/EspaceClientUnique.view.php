<?php
ob_start();

?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Numero de Compte</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
    <td><?php echo $this->tab['id'];?></td>
      <td><?php echo $this->tab['Nom'];?></td>
      <td><?php echo $this->tab['Numero de compte'];?></td>
      <td><button><a href='ClientUpdateForm'>Modifier</a></button></td>
      <td><button><a href=''>Supprimer</a></button></td>
    </tr>
</tbody>
</table>
<?php
$content=ob_get_clean();
require '../TemplateClient.php';

?>