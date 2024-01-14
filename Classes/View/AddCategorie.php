<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une Catégorie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Ajouter une Catégorie</h1>
    <a href="index.php?page=categorie" class="btn btn-primary">Retour à la liste des Catégories</a>

    <form action="index.php?page=categorie&action=addCategorie" method="post">
        <label for="code">Code :</label>
        <input type="text" id="code" name="code" required><br>

        <label for="description">Description :</label>
        <input type="text" id="description" name="description" required><br>

        <input type="submit" value="Ajouter">
    </form>

    

</body>
</html>