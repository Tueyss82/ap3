<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>

<a class="bouton" href="<?= url_to('ajoutPanneau') ?>">Ajouter</a>
<div class="map-responsive">
    <iframe id="carteResponsive" src="https://www.google.com/maps/place/ <?= $listePanneaux['COMMUNE.NOM']?>/@ <?= $listePanneaux['LATITUDE']?>,<?= $listePanneaux['LONGITUDE']?>
,12z/data=!3m1!4b1!4m6!3m5!1s0x12ac418b0b1a9a93:0x406f69c2f3bda90!8m2!3d44.157997!4d1.542131!16s%2Fm%2F03qg1q1?entry=ttu&g_ep=EgoyMDI0MTExMi4wIKXMDSoASAFQAw%3D%3D"
        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    <!-- width="200" height="50" -->
</div>

<?php
$table = new \CodeIgniter\View\Table();
$table->setHeading('Panneaux', 'Latitude', 'Longitude', 'Modifier', 'Supprimer');

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