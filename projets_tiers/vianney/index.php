<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="base.css">
        <title>Epsi v2</title>
    </head>
    <body>
        <div class="mise_en_page">
            <div class="fond_pour_affichage">
                <?php
                    include 'assets/header.php';
                ?>
                <div class="presentationProfiles">
                    <div class="profile">
                        <img class="photoProfile" src="image/vianney.jpg"/>
                        <p>Vianney DRS</p>
                    </div>
                    <div class="profile">
                        <img class="photoProfile" src="https://pbs.twimg.com/media/FBVcjQtWYAM39Po.jpg"/>
                        <p>Téo FSKI</p>
                    </div>
                </div>
                <p>15/20 : projet bien organisé, sauf les header.php et footer.php qui sont dans assets, alors que les images n'y sont pas. Le css permet de changer facilement la couleur d'écriture à travers toutes les pages</p>
                <bouton><a class="bouton_upload" href="upload.php">-> Upload un fichier <-</a></bouton>
                <?php
                    include 'assets/footer.php';
                ?>
            </div>
        </div>
    </body>
</html>