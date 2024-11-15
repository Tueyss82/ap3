<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>

<h1>Ajouter un message</h1>

<form action="<?= url_to('createMessage') ?>" method="post">
    <label for="idcommune">ID Commune :</label>
    <select name="IDCOMMUNE" id="idcommune">
        <option value="">--Choisir une commune--</option>
        <?php foreach ($listeCommune as $commune) : ?>
            <option value="<?= $commune['IDCOMMUNE'] ?>"><?= $commune['NOM'] ?></option>
        <?php endforeach; ?>
    </select>

    <label for="etat">État :</label>
    <input type="text" id="etat" name="ETAT" required />

    <label for="texte">Texte :</label>
    <input type="text" id="texte" name="TEXTE" required />

    <label for="couleur">Couleur :</label>
    <input type="text" id="couleur" name="COULEUR" required />

    <label for="taille">Taille :</label>
    <input type="text" id="taille" name="TAILLE" required />

    <input type="submit" value="Valider" />
</form>

<?= $this->endSection() ?>
