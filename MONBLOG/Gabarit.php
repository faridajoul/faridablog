<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title><?= $titre="farida's Blog" ?></title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="titreBlog">farida Blog</h1></a>
                <p>Bienvenue sur  mon blog.</p>
            </header>
            <div id="contenu">
                        <?= $contenu ?> <!-- Élément spécifique -->
            <footer id="piedBlog">
                Blog réalisé avec PHP.
            </footer>
            </div> <!-- #global -->
    </body>
</html>
