<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>
<section>

    <h1 class="table">
        <a class="bouton" href="<?= url_to('ajoutCommune') ?>">Nouvelle commune</a>
        <?php
        $table = new \CodeIgniter\View\Table();

        $table->setHeading(['IDCommune', 'Nom', 'Departement', 'Modifier', 'Supprimer']);
        foreach ($listeCommune as $commune => $va) {

            $table->addRow(
                $va['IDCOMMUNE'],
                $va['NOM'],
                $va['DEPARTEMENT'],
                '<a class="bouton" href="' . url_to('modifCommune', $va['IDCOMMUNE']) . '">modifier</a>',
                '<a class="bouton" href="' . url_to('supprCommune', $va['IDCOMMUNE']) . '">supprimer</a>'
            );

            echo $table->generate();
        }

        ?>
    </h1>
</section>
<?= $this->endSection() ?>