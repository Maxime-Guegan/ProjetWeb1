<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Enseignant</title>
    <!-- Ajoutez ici vos liens CSS ou styles pour la mise en forme -->
</head>
<body>
    <h1>Modifier un Enseignant</h1>
    <a href="index.php?page=enseignant">Retour à la liste des Enseignants</a>

    <form action="index.php?page=enseignant&action=updateEnseignant" method="post">
    <input type="hidden" id="id" name="id" value="<?php echo $enseignant["numlicencie"]?>" required><br>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"  value="<?php echo $enseignant["nom"]?>" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"  value="<?php echo $enseignant["prenom"]?>" required><br>

        <label for="code">Catégorie:</label>
        <select id="code" name="code" value="<?php echo $enseignant["codecategorie"]?>">
        <?php foreach($data as $row){
            echo"<option value='".$row["CodeCategorie"]."'>".$row["NomCategorie"]."</option>";
            }?>
        </select><br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="<?php echo $enseignant["email"]?>" required><br>

        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" value="<?php echo $enseignant["mdp"]?>" required><br>

        <label for="admin">Administrateur :</label>
        <input type="checkbox" id="admin" name="admin" ><br>

        <input type="submit" value="Modifier">
    </form>

    
    
</body>
</html>