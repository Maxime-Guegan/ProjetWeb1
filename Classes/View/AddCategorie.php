<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une Catégorie</title>
    <!-- Ajoutez ici vos liens CSS ou styles pour la mise en forme -->
</head>
<body>
    <h1>Ajouter une Catégorie</h1>
    <a href="index.php?page=categorie">Retour à la liste des Catégories</a>

    <form action="index.php?page=categorie&action=addCategorie" method="post">
        <label for="code">Code :</label>
        <input type="text" id="code" name="code" required><br>

        <label for="description">Description :</label>
        <input type="text" id="description" name="description" required><br>

        <input type="submit" value="Ajouter">
    </form>

    

</body>
</html>