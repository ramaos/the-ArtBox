<?php include_once('includes/oeuvres.php'); ?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>

    <header>
        <?php include_once('includes/header.php'); ?>
    </header>
    <main>
        <div id="liste-oeuvres">
            <?php foreach ($oeuvres as $listOeuvres) : ?>
                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?php echo $listOeuvres['id']; ?>">
                        <?php echo $listOeuvres['image']; ?>
                        <h2><?php echo $listOeuvres['title']; ?></h2>
                        <p class="description"><?php echo $listOeuvres['author']; ?></p>
                    </a>
                </article>
            <?php endforeach ?>
        </div>
    </main>
    <footer>
        <?php include_once('includes/footer.php'); ?>
    </footer>
</body>

</html>