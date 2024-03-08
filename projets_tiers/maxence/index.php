<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>EPSILON - Accueil</title>
</head>
<body class="bg-no-repeat min-h-[100vh] bg-gradient-to-b from-fuchsia-300 to-violet-400 text-green-600">
    <div class="w-1/4 mx-auto mt-32 h-64 bg-gradient-to-b from-white text-center rounded-lg">
        <?php include "./header.php" ?>
        <div class="flex flex-wrap justify-center">
            <div class="mx-4">
                <img src="./assets/maxenss.webp" class="w-36 h-36 mx-auto rounded-full my-5"/>
                <p>Maxence LANDA</p>
            </div>
            <div class="mx-4">
                <img src="https://pbs.twimg.com/media/FBVcjQtWYAM39Po.jpg" class="w-36 h-36 mx-auto rounded-full my-5"/>
                <p>Téo FSKI</p>
            </div>
        </div>
        <p>15/20: Utilisation de tailwind, un outil que j'adore, mais pas de la fonction native pour récuperer l'extension du fichier.</p>
        <a href="./form.php" class="underline">Upload your file !</a>
        <?php include("footer.php"); ?>
    </div>
</body>
</html>