<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>


<form method="post" action=<?= url_to('createUtilisateur') ?>>
<label for="commune">Commune</label>
    <select name="idcommune">
        <option value="">Choisissez une commune</option>
        <?php
            foreach($listeUtilisateur as $user) {
                echo "<option value=" . $user['IDCOMMUNE'] . ">".$user['NOM'] ." (". $user['DEPARTEMENT'].")</option>";
        }
        ?>
    </select>
    <label for="prenom">Prénom</label>
    <input id="prenom" name="prenom" type="text" />
    <input type="submit" value="Valider">
</form>
<?= $this->endSection() ?>