<!DOCTYPE html>
<html lang="en">


<!-- HEADER: MENU + HEROE SECTION -->
<header>
    <meta charset="UTF-8">
    <title>Gestion des étudiants</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/form.css">
    
    <div class="menu">
        <ul>
            <li class="logo">
                <img class="img" src="/image/logo.png" />
            </li>
            <li class="menu-item hidden"><a href="<?= url_to('index') ?>">Acceuil</a></li>
            <li class="menu-item hidden"><a href="<?= url_to('connexion') ?>">Se Connecter</a></li>
            <li class="menu-item hidden"><a href="<?= url_to('utilisateur') ?>">Gestion utilisateurs</a></li>
            <li class="menu-item hidden"><a href="<?= url_to('clients') ?>">Gestion clients</a></li>
            <li class="menu-item hidden"><a href="<?= url_to('message') ?>">test msg</a></li>
            <li class="menu-item hidden"><a href="<?= url_to('panneaux') ?>">Gestion Panneaux</a></li>
            <li class="menu-item hidden"><a href="<?= url_to('contact') ?>">contact</a></li>
        </ul>
    </div>
</header>

<body>
    <?= $this->renderSection('contenu') ?>

    
</body>
<footer>
        <div class="environment">

            <p>Nous transformons
                les idées en réalité.</p>

            <p>Publicom
                10 Route de Galice
                13100 Aix-en-Provence
                Tel. : 04 42 99 01 20</p>
            <a href="<?= url_to('contact') ?>">contact</a>

        </div>
        <div class="copyrights">

            <p>&copy; <?= date('Y') ?> L'agence design et digitale</p>

            <p>Mentions légales/Données personnelles/Préférences cookies</p>

        </div>
</footer>