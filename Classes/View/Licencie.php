<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Licenciés</title>
    <!-- Ajoutez ici vos liens CSS ou styles pour la mise en forme -->
</head>
<body>
    <h1>Liste des Licenciés</h1>
    <a href="index.php?page=licencie&action=addLicencieView">Ajouter un contact</a>


        
        <?php 

            if($data->rowCount() > 0){
                echo"   <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Catégorie</th>
                        <th>Contact</th>
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
                                <td>
                                    
                                    <a href='index.php?page=licencie&action=updateLicencieView&param=".$row['numlicencie']."'>Modifier</a>
                                    <a href='index.php?page=licencie&action=deleteLicencie&param=".$row['numlicencie']."'>Supprimer</a>
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
        

</body>
</html>