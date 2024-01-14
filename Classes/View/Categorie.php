<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Catégories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Liste des Catégories</h1>
    <a href="index.php?page=categorie&action=addCategorieView" class="btn btn-primary">Ajouter une catégorie</a>


        
        <?php 

            if($data->rowCount() > 0){
                echo"   <table class='table'>
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
        
       
</body>
</html>