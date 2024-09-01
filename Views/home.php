<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog Dev</title>
</head>

<body>
    <?php include_once '../includes/header.php'; ?>
    <section>
        <div>
            <h2> Welcome to my blog</h2>
            <p>
                Où <em>professionalisme</em> s’allie avec <em>passion</em>. Depuis
                plus de 5 ans maintenant, j’exerce mon métier avec la passion qui
                m’anime : capturer l’essence de chaque instant.
            </p>
            <a href="#contact" class="cta">UN PROJET ? ÉCRIVEZ-MOI</a>
        </div>
    </section>
    <div>
        <h2>Suivez l'actualité</h2>
        <?php foreach ($carticles as $article): ?>
            <div>
                <h3><?= $article['title'] ?></h3>
                <p>Écrit par <?= $article['author'] ?></p>
                <p><?= $article['resume'] ?></p>
                <p>Publié le <?= $article['date'] ?></p>
                <a href="./publier.php">En lire plus</a>
            </div>

        <?php endforeach; ?>

    </div>

    <?php include_once '../includes/footer.php'; ?>
</body>

</html>