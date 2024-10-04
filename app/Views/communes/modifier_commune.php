<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>


<form action="<?= url_to("modifP") ?>" method="post">
  <ul>

      <label for="nom">Nom de la commune</label>
      <input type="text" id="name" name="nom" value=<?= $commune['NOM']?>
      <label for="prenom">Département</label>
      <input type="text" id="departement" name="departement" value=<?= $commune['DEPARTEMENT']?>>
  </ul>
  <input id="id" name="id" type="hidden" value="<?= $commune['id']?>" />
  <input type="submit" value="Modifier" />
</form>




<?= $this->endSection() ?>