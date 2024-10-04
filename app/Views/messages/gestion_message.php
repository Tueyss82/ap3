<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>
<!-- CONTENT -->

<section>
    <a class="bouton" href="<?= url_to('ajout_message') ?>">Ajouter un message</a>
    <?php

    $table = new \CodeIgniter\View\Table();
    $table->setHeading('ETAT', 'TEXTE', 'COULEUR', 'TAILLE', 'Modifier', 'Supprimer');
    foreach ($messages as $message) {
        $table->addRow(
            $message['ETAT'],
            $message['TEXTE'],
            $message['COULEUR'],
            $message['TAILLE'],
            '<a class="bouton" href="' . url_to('modifier_message', $message['IDMESSAGE']) . '">Modifier</a>',
            '<a class="bouton" href="' . url_to('suppr_message', $message['IDMESSAGE']) . '">Supprimer</a>'
        );
    }
    echo $table->generate();
    ?>
</section>

<?= $this->endSection() ?>
