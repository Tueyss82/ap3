<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>

<form action="<?= url_to('ajoutC') ?>" method="post">
  <ul>
    <label for="nom">Nom</label>
    <input type="text" id="name" name="nom" />
    <label for="departement">Département</label>
    <input type="text" id="departement" name="departement" />
  </ul>
  <input type="submit" value="Ajouter" />
</form>

<?= $this->endSection() ?>