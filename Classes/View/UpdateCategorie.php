<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier une Catégorie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Modifier une Catégorie</h1>
    <a href="index.php?page=categorie" class="btn btn-primary">Retour à la liste des Catégories</a>
    <form action="index.php?page=categorie&action=updateCategorie" method="post" >
        
        <input type="hidden" id="code" name="code" value="<?php echo $categorie["CodeCategorie"]?>" required><br>

        <label for="description">Description :</label>
        <input type="text" id="description" name="description" value="<?php echo $categorie["NomCategorie"]?>"required><br>

        <input type="submit" value="Modifier">
    </form>
    
    

</body>
</html>