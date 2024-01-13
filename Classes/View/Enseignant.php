<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Enseignants</title>
    <!-- Ajoutez ici vos liens CSS ou styles pour la mise en forme -->
</head>
<body>
    <h1>Liste des Enseignants</h1>
    <a href="index.php?page=enseignant&action=addEnseignantView">Ajouter un Enseignant</a>


        
        <?php 

            if($data->rowCount() > 0){
                echo"   <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Catégorie</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Mot de passe</th>
                        <th>Administrateur</th>
                    </tr>
                </thead>
                <tbody>";

                foreach ($data as $row){
                echo"
                            <tr>
                                <td>".$row['nom']."</td>
                                <td>".$row['prenom']."</td>
                                <td>".$row['nomcategorie']."</td>
                                ";
                                if(is_null($row["numcontact"])){
                                    echo "<td><a href='index.php?page=contact&action=addContactView&param=".$row['numlicencie']."'>Créer</a></td>";
                                }else{
                                    echo"<td><a href='index.php?page=contact&action=updateContactView&param=".$row['numcontact']."'>Voir</a></td>";
                                }
                                echo"
                                <td>".$row['email']."</td>
                                <td>".$row['mdp']."</td>";
                                if($row['administrateur']){
                                    echo"<td>oui</td>";
                                }else{
                                    echo"<td>non</td>";
                                }
                                
                                    echo"
                                <td>
                                    
                                    <a href='index.php?page=enseignant&action=updateEnseignantView&param=".$row['numlicencie']."'>Modifier</a>
                                    <a href='index.php?page=enseignant&action=deleteEnseignant&param=".$row['numlicencie']."'>Supprimer</a>
                                </td>
                            </tr>
";
                }
                echo "                    
                </tbody>
            </table>";
            }else{
                echo "<p>Aucun Licencié trouvé.</p>";
                
            }
           
        ?>
        <br><a href="index.php?page=home">Acceuil</a>

</body>
</html>