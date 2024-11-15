<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>

<form method="post" action="<?= url_to('createMessage') ?>">
    <label for="departement">Département :</label>
    <select name="IDCOMMUNE">
        <option value="">Choisissez un département</option>
        <?php
        foreach ($listeCommune as $commune) {
            echo "<option value=\"" . $commune['IDCOMMUNE'] . "\">" . $commune['NOMCOMMUNE'] . " (" . $commune['DEPARTEMENT'] . ")</option>";
        }
        ?>
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
