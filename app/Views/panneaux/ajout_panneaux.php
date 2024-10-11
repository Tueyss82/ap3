<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>

<h1>Ajouter Panneaux</h1>
<form action= "<?= url_to("createPanneau") ?>" method="post">
    <label for="name">Nom Panneau</label>
    <input type="text" id="name" name="REFERENCE" value="" >

    <label for="latitude">Latitude</label>
    <input type="text" id="latitude" name="LATITUDE" value="" >

    <label for="longitude">Longitude</label>
    <input type="text" id="longitude" name="LONGITUDE" value="">

    <input type="submit" value="Valider">
</form>


<?= $this->endSection() ?>



