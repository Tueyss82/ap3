<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>
<?= var_dump($listeCommune) ?>


<form method="post" action=<?= url_to('createUtilisateur') ?>>
<label for="commune">Commune</label>
    <select name="idcommune">
        <option value="">Choisissez une commune</option>
        <?php
            foreach($listeCommune as $commune) {
                echo "<option value=" . $commune['idcommune'] . ">".$commune['nom'] ." (". $commune['departement'].")</option>";
        }
        ?>
    </select>
    <label for="prenom">Prénom</label>
    <input id="prenom" name="prenom" type="text" />
    <input type="submit" value="Valider">
</form>
<?= $this->endSection() ?>