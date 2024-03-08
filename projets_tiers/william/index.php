<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Epsilon</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="text-green-700 overflow-hidden h-screen bg-gradient-to-b from-fuchsia-400 to-fuchsia-700">
        <div class="pt-28">
            <div class="flex flex-col items-center justify-center text-center bg-gradient-to-b from-white to-transparent w-fit h-fit mx-auto px-20 rounded-xl">
                <?php
                    include 'header.php';
                ?>
                <div class="w-full flex flex-wrap justify-center">
                    <div class="mx-4">
                        <img src="william.jpg" alt="William, prince de Galles" class="w-40 rounded-full">
                        <p class="my-4">William DOURLENS</p>
                    </div>
                    <div class="mx-4">
                        <img src="https://pbs.twimg.com/media/FBVcjQtWYAM39Po.jpg" alt="Theobabac" class="w-40 rounded-full">
                        <p class="my-4">Téo FSKI</p>
                    </div>
                </div>
                <p>16/20 : utilisation de tailwind, outil que j'adore ! projet bien structuré, et qui fonctionne bien. Petit + pour le readme</p>
                <a href="upload.php"><p class="mb-4 underline text-fuchsia-900">Upload your file !</p></a>
                <?php include("footer.php"); ?>
            </div>
        </div>
    </body>
</html>