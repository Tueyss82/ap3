<?= $this->extend('layout')  ?>

<?= $this->section('contenu') ?>

<?php

use \CodeIgniter\View\Table;

$table = new Table();

?>

<a class="button" href="<?= url_to('ajoutMessage') ?>">Ajouter un message</a>
<a class="button" >Expirés</a>
<a class="button" >En cours </a>
<a class="button" >Sans date de désactivation</a>

<?php

$table->setHeading('État', 'Texte', 'Caractéristiques', 'Modifier', 'Supprimer', 'Date De Désactivation');

// var_dump($messages);
// die();

foreach ($messages as $message) {
    $table->addRow(
        $message['ETAT'],
        $message['TEXTE'],
        $message['COULEUR'],
        // $message['TAILLE'],
        '<a class="button" href="' . url_to('modifMessage', $message['IDMESSAGE']) . '">Modifier</a>',
        '<form method="post" class="form" action="' . url_to('supprMessage', $message['IDMESSAGE']) . '">
            <input type="hidden" name="IDMESSAGE" value="' . $message['IDMESSAGE'] . '">
            <input type="submit" value="Supprimer">
        </form>' 
        , 
        $message['DATE_DESACTIVATION']
    );
}

echo $table->generate();

?>

<?= $this->endSection() ?>