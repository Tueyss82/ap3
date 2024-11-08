<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>

<a class="bouton" href= "<?=url_to('ajoutPanneau')?>">Ajouter</a>

<?php
    $table = new \CodeIgniter\View\Table();
    $table->setHeading('Panneaux', 'Latitude', 'Longitude','Modifier','Supprimer');
    
    foreach ($listePanneaux as $colonne => $c) {
    
        $table->addRow(
            $c['REFERENCE'],
            $c['LATITUDE'],
            $c['LONGITUDE'],
            '<a class="bouton" href="' . url_to('modifPanneau', $c['IDPANNEAU']) . '">Modifier</a>',
            '<form  method="post" action="' . url_to('supprPanneau', $c['IDPANNEAU']) . '">
                <input type="hidden" name="IDPANNEAU" value="' . $c['IDPANNEAU'] . '">
                <input type="submit" value="Supprimer">
            </form>',
        );
        echo $table->generate();
    }
    
?>
<?= $this->endsection('contenu') ?>

