<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>


<form method="post" action="<?= url_to('updateUtilisateur') ?>">
    <input id="IDUTILISATEUR" name="IDUTILISATEUR" type="hidden" value="<?= $utilisateur['IDUTILISATEUR'] ?>"/>
    <label for="departement">Département</label>
    <select name="IDCOMMUNE">
        <option value="">Choisissez un département</option>
        <?php
        foreach ($listeCommune as $commune) {
            echo "<option value=" . $commune['IDCOMMUNE'] . " selected>" . $commune['NOM'] . " (" . $commune['DEPARTEMENT'] . ")</option>";
        }
        ?>
    </select>
    <label for="mail">Mail</label>
    <input id="mail" name="MAIL" type="text" value="<?= $utilisateur['MAIL'] ?>" />
    <label for="identifiant">Identifiant de l'Utilisateur</label>
    <input id="identifiant" name="IDENTIFIANT" type="text" value="<?= $utilisateur['IDENTIFIANT'] ?>" />
    <label for="motdepasse">Mot de Passe</label>
    <input id="motdepasse" name="MOTDEPASSE" type="password" value="<?= $utilisateur['MOTDEPASSE'] ?>" />
    <label for="role">Rôle</label>
    <select name="ROLE">
        <option value="">Choisissez un rôle</option>
        <option value="0">Utilisateur</option>
        <option value="1">Admin</option>
    </select>
    <input type="submit" value="Valider">
</form>
<?= $this->endSection() ?>