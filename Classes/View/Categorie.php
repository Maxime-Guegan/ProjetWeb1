<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Catégories</title>
    <!-- Ajoutez ici vos liens CSS ou styles pour la mise en forme -->
</head>
<body>
    <h1>Liste des Catégories</h1>
    <a href="index.php?page=categorie&action=addCategorieView">Ajouter une catégorie</a>


        
        <?php 

            if($data->rowCount() > 0){
                echo"   <table>
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>";

                foreach ($data as $row){
                echo"
                            <tr>
                                <td>".$row['CodeCategorie']."</td>
                                <td>".$row['NomCategorie']."</td>
                                
                                <td>
                                    
                                    <a href='index.php?page=categorie&action=updateCategorieView&param=".$row['CodeCategorie']."'>Modifier</a>
                                    <a href='index.php?page=categorie&action=deleteCategorie&param=".$row['CodeCategorie']."'>Supprimer</a>
                                </td>
                            </tr>
";
                }
                echo "                    
                </tbody>
            </table>";
            }else{
                echo "<p>Aucun contact trouvé.</p>";
                
            }
           
        ?>
        
        <br><a href="index.php?page=home">Acceuil</a>
</body>
</html>