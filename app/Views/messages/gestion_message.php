<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>

<section>
    <a class="bouton" href="<?= url_to('ajoutMessage') ?>">Ajouter un message</a>

    <?php
    $table = new \CodeIgniter\View\Table();
    $table->setHeading('État', 'Texte', 'Couleur', 'Taille', 'Modifier', 'Supprimer');

    foreach ($messages as $message) {
        $table->addRow(
            $message['ETAT'],
            $message['TEXTE'],
            $message['COULEUR'],
            $message['TAILLE'],
            '<a class="bouton" href="' . url_to('modifMessage', $message['IDMESSAGE']) . '">Modifier</a>',
            '<a class="bouton" href="' . url_to('supprMessage', $message['IDMESSAGE']) . '">Supprimer</a>'
        );
    }

    echo $table->generate();
    ?>
</section>

<?= $this->endSection() ?>
