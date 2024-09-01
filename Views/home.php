<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog Dev</title>
    <link rel="stylesheet" href="../Assets/style.css">
</head>

<body>
    <?php include_once '../inc/header.php'; ?>
    <section>
        <div>
            <h2>On veut savoir ce qui rend les développeurs heureux
            </h2>
            <p>
                Ce blog a pour vocation de parcourir toutes les facettes des métiers de la tech.
                Nous invitons des experts et des recruteurs du monde IT pour aborder de nombreux sujets : carrière, guides tech, salaire, bonheur au travail… Découvrez le parcours de <em>professionnels expérimentés</em> au travers de portraits et d’interviews.
            </p>
            <a href="article.php" class="cta">Voir tout les articles</a>
        </div>
    </section>
    <div class="grid">
        <h2>Suivez l'actualité</h2>
        <?php foreach ($articles as $article): ?>
            <div class="article">
                <img src="" alt="">
                <h3><?= $article['title'] ?></h3>
                <p>Écrit par <?= $article['author'] ?></p>
                <p><?= $article['resume'] ?></p>
                <p>Publié le <?= $article['date'] ?></p>
                <a href="./publier.php">En lire plus</a>
            </div>

        <?php endforeach; ?>

    </div>

    <?php include_once '../inc/footer.php'; ?>
</body>

</html>