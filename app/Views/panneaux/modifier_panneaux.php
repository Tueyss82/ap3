<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>

<!--  -->
<h1>Modifier Panneaux</h1>
<form action= "<?= url_to("updatePanneau") ?>" method="post">
    <label for="reference">Nom Panneau</label>
    <input type="text" id="reference" name="reference" value="<?= $panneauModif['REFERENCE'] ?>" />

    <label for="latitude">Latitude</label>
    <input type="text" id="latitude" name="latitude" value="<?= $panneauModif['LATITUDE'] ?>" />

    <label for="longitude">Longitude</label>
    <input type="text" id="longitude" name="longitude" value="<?= $panneauModif['LONGITUDE'] ?>" />

    <input name="id" id="id" type="hidden" value="<?= $panneauModif['IDPANNEAU'] ?>" />

    <input type="submit" value="Valider" />
</form>

<?= $this->endSection() ?>