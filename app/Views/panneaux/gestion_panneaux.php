<?php

    
    $table = new \CodeIgniter\View\Table();
    $table->setHeading('Panneaux', 'Latitude', 'Longitude');
    foreach ($listePanneaux as $colonne) {
        //echo '<li>' . $valeur['nom'] . ' ' . $valeur['prenom'] . '</li>';
        $table->addRow(
            $colonne['REFERENCE'],
            $colonne['LATITUDE'],
            $colonne['LONGITUDE'],
            '<a class="bouton" href="' . url_to('modifPanneau', $colonne['panneau.ID']) . '">Modifier</a>',
            '<a class="bouton" href="' . url_to('suppPanneau', $colonne['panneau.ID']) . '">Supprimer</a>'
        );
        echo $table->generate();
    }
?>