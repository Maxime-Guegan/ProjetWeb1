<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Enseignant</title>
    <!-- Ajoutez ici vos liens CSS ou styles pour la mise en forme -->
</head>
<body>
    <h1>Ajouter un Enseignant</h1>
    <a href="index.php?page=enseignant">Retour à la liste des Enseignants</a>

    <form action="index.php?page=enseignant&action=addEnseignant" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="code">Catégorie:</label>
        <select id="code" name="code">
        <?php foreach($data as $row){
            echo"<option value='".$row["CodeCategorie"]."'>".$row["NomCategorie"]."</option>";
            }?>
        </select><br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>

        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" required><br>

        <label for="admin">Administrateur :</label>
        <input type="checkbox" id="admin" name="admin"><br>

        <input type="submit" value="Ajouter">
    </form>

    
    
</body>
</html>