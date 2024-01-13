<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Contact</title>
    <!-- Ajoutez ici vos liens CSS ou styles pour la mise en forme -->
</head>
<body>
    <h1>Modifier un Contact</h1>
    <a href="index.php?page=licencie">Retour à la liste des Licencié</a>

    <form action="index.php?page=contact&action=updateContact" method="post">
    <input type="hidden" id="id" name="id" value="<?php echo $id?>" required><br>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="<?php echo $contact["Nom"] ?>" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $contact["Prenom"] ?>" required><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="<?php echo $contact["Email"] ?>" required><br>

        <label for="tel">Numéro de téléphone :</label>
        <input type="text" id="tel" name="tel" value="<?php echo $contact["NumTel"] ?>" required><br>

        <input type="submit" value="Modifier">
    </form><br>
    <a href="index.php?page=contact&action=deleteContact&param=<?php echo $id?>">Supprimer</a>

    

</body>
</html>