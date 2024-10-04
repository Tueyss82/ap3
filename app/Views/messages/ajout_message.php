<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>


<h1>Ajouter Message</h1>

<form action="<?= url_to("message_create") ?>" method="post">
    <label for="idcommune">ID Commune :</label>
    <select name="IDCOMMUNE" id="idcommune">

        <option value="">--Choisir une commune--</option>
        <?php
        foreach ($listeCommune as $commune) {
        ?>
            <option value="<?= $commune['IDCOMMUNE'] ?>"><?= $commune['NOMCOMMUNE'] ?></option>
        <?php
        }
        ?>
    </select>

    <label for="etat">État :</label>
    <input type="text" id="etat" name="ETAT" />

    <label for="texte">Texte :</label>
    <input type="text" id="texte" name="TEXTE" />

    <label for="couleur">Couleur :</label>
    <input type="text" id="couleur" name="COULEUR" />

    <label for="taille">Taille :</label>
    <input type="text" id="taille" name="TAILLE" />

    <input type="submit" value="Valider" />
</form>

<?= $this->endSection() ?>
