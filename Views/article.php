<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog</title>
    <link rel="stylesheet" href="../Assets/style.css">
</head>


<body>
    <?php
    require_once 'header.php';
    ?>
    <div class="container">


        <div class="card" style="width: 800px;">

            <?php foreach ($blogs as $blog) : ?>

                <div class="card-body">
                    <!-- <img class="card-img-top" src="<?= getPoster($blog['image']) ?>" alt="<?= $blog['title'] ?>"> -->
                    <h5 class="card-title"><?= $blog['title'] ?></h5>
                    <p class="card-text"><?= $blog['author'] ?></p>
                    <p class="card-text"><?= $blog['content'] ?></p>
                    <p class="card-text"><small class="text-muted">Edit at : <?= $blog['publication_date'] ?></small></p>
                    <a href="home.php" class="btn btn-primary">Aller à la page d'accueil</a>
                </div>
            <?php endforeach ?>
        </div>


        <?php
        require_once 'footer.php';
        ?>
    </div>
</body>

</html>