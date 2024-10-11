<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>

<?php

use \CodeIgniter\View\Table;

$table = new table();

?>

<a class=button href=<?= url_to('ajoutUtilisateur') ?>>Ajouter un utilisateur</a>

<?php

$table->setHeading('Nom Commune', 'Département', 'Identifiant', 'Mail', 'Rôle','Modifier', 'Supprimer');


foreach ($listeUtilisateur as $user) {
    $table->addRow(
        $user['NOMCOMMUNE'],
        $user['DEPARTEMENT'],
        $user['IDENTIFIANT'],
        $user['MAIL'],
        $user['ROLE'],
        '<a class=button href="' . url_to('modifUtilisateur', $user['IDUTILISATEUR']) . '">Modifier</a>',
        '<form method="post" action="'.url_to('supprUtilisateur', $user['IDUTILISATEUR']).' class="button" ">
            <input type="hidden" name="IDUTILISATEUR" value="'. $user['IDUTILISATEUR'] .'">
            <input type="submit" value="Supprimmer">
        </form>',

    );
}
echo $table->generate();
?>

<?= $this->endSection() ?>  