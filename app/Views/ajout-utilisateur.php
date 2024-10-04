<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>

<form method="post" action=<?= url_to('createEtudiant') ?>>
    <label for="nom">Nom</label>
    <input id="nom" name="nom" type="text" />
    <label for="prenom">Prénom</label>
    <input id="prenom" name="prenom" type="text" />
    <label for="departement">Département</label>
    <select name="departement_id">
        <option value="">Choisissez un département</option>
        <?php
            foreach($listeDepartement as $departement) {
                echo "<option value=" . $departement['id'] . ">".$departement['code'] ." - ". $departement['nom']."</option>";
        }
            
        ?>
    </select>
    <input type="submit" value="Valider">
</form>
<?= $this->endSection() ?>