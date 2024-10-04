<?php
// Connexion à la base de données


// Récupération des messages

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des messages</title>
</head>
<body>
    <h1>Gestion des messages</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($messages as $message): ?>
        <tr>
            <td><?= $message['IDMESSAGE'] ?></td>
            <td><?= $message['content'] ?></td>
            <td>
                <a href="modifier-message.php?id=<?= $message['IDMESSAGE'] ?>">Modifier</a>
                <a href="supprimer-message.php?id=<?= $message['IDMESSAGE'] ?>">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="ajout-message.php">Ajouter un message</a>
</body>
</html>
