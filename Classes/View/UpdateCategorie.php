<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier une Catégorie</title>
    <!-- Ajoutez ici vos liens CSS ou styles pour la mise en forme -->
</head>
<body>
    <h1>Modifier une Catégorie</h1>

    <form action="index.php?page=categorie&action=updateCategorie" method="post">
        
        <input type="hidden" id="code" name="code" value="<?php echo $categorie["CodeCategorie"]?>" required><br>

        <label for="description">Description :</label>
        <input type="text" id="description" name="description" value="<?php echo $categorie["NomCategorie"]?>"required><br>

        <input type="submit" value="Modifier">
    </form>
    
    

</body>
</html>