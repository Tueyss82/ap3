<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>
<section>

    <h1 class="table">
        <a class="bouton" href="<?= url_to('ajout') ?>">Nouvelle commune</a>
        <?php
        $table = new \CodeIgniter\View\Table();

        $table->setHeading(['IDCommune', 'Nom', 'Departement', 'Modifier', 'Supprimer']);
        foreach ($gestion_clients as $commune => $va) {

            $table->addRow(
                $va['IDCOMMUNE'],
                $va['NOM'],
                $va['DEPARTEMENT'],
                '<a class="bouton" href="' . url_to('modif', $va['id']) . '">m</a>',
                '<a class="bouton" href="' . url_to('delete', $va['id']) . '">s</a>'
            );

            echo $table->generate();
        }

        ?>
    </h1>
</section>
<?= $this->endSection() ?>