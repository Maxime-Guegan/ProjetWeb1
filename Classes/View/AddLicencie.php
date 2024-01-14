<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Licencié</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Ajouter un Licencié</h1>
    <a href="index.php?page=licencie" class="btn btn-primary">Retour à la liste des Licenciés</a>

    <form action="index.php?page=licencie&action=addLicencie" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="prenom" id="prenom" name="prenom" required><br>

        <label for="code">Catégorie:</label>
        <select id="code" name="code">
        <?php foreach($data as $row){
            echo"<option value='".$row["CodeCategorie"]."'>".$row["NomCategorie"]."</option>";
            }?>
        </select>
        <input type="submit" value="Ajouter">
    </form>

    
    
</body>
</html>