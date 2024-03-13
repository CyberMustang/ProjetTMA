<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <title>Formulaire</title>
</head>
<body>
    <div class="background">
        <div class="text">
        <?php include 'header.php'; ?>
            <form method="POST" action="formulaire.php" enctype="multipart/form-data">
                <input type="file" name="fichier" accept="image/*, .pdf">
                <input type="submit" name="upload">
            </form>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_FILES['fichier']))
{ 
     $dossier = 'upload/';
     $fichier = basename($_FILES['fichier']['name']);
     if(move_uploaded_file($_FILES['fichier']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}
?>