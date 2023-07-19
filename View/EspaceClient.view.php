<?php
ob_start();

for($i=0;$i<count($this->tab);$i++)
{
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
    <td><?php echo $this->tab[$i]['id'];?></td>
      <td><?php echo $this->tab[$i]['Nom'];?></td>
      <td><?php echo $this->tab[$i]['Numero de compte'];?></td>
      <td><button class='bg-info'><a href='ClientUpdateForm'>Modifier</a></button></td>
      <td><button class='bg-danger'><a href=''>Supprimer</a></button></td>
    </tr>
</tbody>
</table>

<?php
};
$content=ob_get_clean();
require '../TemplateClient.php';

?>