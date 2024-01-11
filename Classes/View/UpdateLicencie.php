<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Licencié</title>
    <!-- Ajoutez ici vos liens CSS ou styles pour la mise en forme -->
</head>
<body>
    <h1>Modifier un Licencié</h1>
    <a href="index.php?page=licencie">Retour à la liste des Licenciés</a>

    <form action="index.php?page=licencie&action=updateLicencie" method="post">
    <input type="hidden" id="id" name="id" value="<?php echo $licencie["NumLicencie"]?>" required><br>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="<?php echo $licencie["Nom"]?>" required><br>

        <label for="prenom">Prénom :</label>
        <input type="prenom" id="prenom" name="prenom" value="<?php echo $licencie["Prenom"]?>" required><br>

        <label for="code">Catégorie:</label>
        <select id="code" name="code" value="<?php echo $licencie["CodeCategorie"]?>">
        <?php foreach($data as $row){
            echo"<option value='".$row["CodeCategorie"]."'>".$row["NomCategorie"]."</option>";
            }?>
        </select>
        <input type="submit" value="Modifier">
    </form>

    
    
</body>
</html>