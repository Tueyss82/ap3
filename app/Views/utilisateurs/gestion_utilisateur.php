<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>

<?php

use \CodeIgniter\View\Table;

$table = new table();

?>

<a class=button href=<?= url_to('ajoutUtilisateur') ?>>Ajouter un utilisateur</a>

<?php

$table->setHeading('Nom Commune', 'Département', 'Modifier', 'Supprimer');


foreach ($listeUtilisateur as $user) {
    $table->addRow(
        $user['NOMCOMMUNE'],
        $user['DEPARTEMENT'],
        '<a class=button href="' . url_to('modifUtilisateur', $user['IDUTILISATEUR']) . '">Modifier</a>',
        '<a class=button href="' . url_to('supprUtilisateur', $user['IDUTILISATEUR']) . '">Supprimer</a>'
    );
}
echo $table->generate();
?>

<?= $this->endSection() ?>  