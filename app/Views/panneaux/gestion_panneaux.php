<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>

<?php

    $table = new \CodeIgniter\View\Table();
    $table->setHeading('Panneaux', 'Latitude', 'Longitude','Modifier','Supprimer');
    echo '<a class="bouton" href="' . url_to('ajoutPanneau') . '">Ajouter</a>';
    foreach ($listePanneaux as $colonne) {
        //echo '<li>' . $valeur['nom'] . ' ' . $valeur['prenom'] . '</li>';
        $table->addRow(
            $colonne['REFERENCE'],
            $colonne['LATITUDE'],
            $colonne['LONGITUDE'],
            '<a class="bouton" href="' . url_to('modifPanneau', $colonne['IDPANNEAU']) . '">Modifier</a>',
            '<a class="bouton" href="' . url_to('supprPanneau', $colonne['IDPANNEAU']) . '">Supprimer</a>'
        );
        echo $table->generate();
    }
?>
<?= $this->endsection('contenu') ?>