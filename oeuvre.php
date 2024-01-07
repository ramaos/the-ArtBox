<?php include_once('includes/oeuvres.php'); ?>
<?php $identite = $_GET['id']; ?>
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
        <?php foreach ($oeuvres as $listOeuvres) : ?>
            <?php if (array_key_exists('id', $listOeuvres) && ($listOeuvres['id'] == $identite)) : ?>

                <article id="detail-oeuvre">
                    <div id="img-oeuvre">
                        <?php echo $listOeuvres['image']; ?>
                    </div>
                    <div id="contenu-oeuvre">
                        <h1><?php echo $listOeuvres['title']; ?></h1>
                        <p class="description"><?php echo $listOeuvres['author']; ?></p>
                        <p class="description-complete"><?php echo $listOeuvres['description']; ?>

                        </p>
                    </div>
                </article>
            <?php endif ?>
        <?php endforeach ?>

    </main>
    <footer>
        <?php include_once('includes/footer.php'); ?>
    </footer>
</body>

</html>