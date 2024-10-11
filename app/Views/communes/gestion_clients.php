<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>
<section>

    <a class="bouton" href="<?= url_to('ajoutCommune') ?>">Nouvelle commune</a>
    <?php
    $table = new \CodeIgniter\View\Table();

    $table->setHeading(['Nom', 'Departement', 'Modifier', 'Supprimer']);
    foreach ($listeCommune as $commune => $va) {

        $table->addRow(
            $va['NOM'],
            $va['DEPARTEMENT'],
            '<a class="button" href="' . url_to('modifCommune', $va['IDCOMMUNE']) . '">modifier</a>',
            '<a class="button" href="' . url_to('supprCommune', $va['IDCOMMUNE']) . '">supprimer</a>'
        );

    }
    
    echo $table->generate();
    ?>
</section>

<?= $this->endSection() ?>