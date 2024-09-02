<?php $nav = 'search'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <title>Searh</title>
</head>
<body>
    <?php include "header.php"; ?>
    <div class="container mt-2">
        <form class="d-flex m-3" role="search" method="post" autocomplete="off">
            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success fas fa-search" type="submit"></button>
        </form>
        <?php if ($nb > 0): ?>
            <h4 style="color:#192a56;" class="m-3">Resultat : <?= $nb;?></h4>
        <?php else :?>
            <h4 style="color:#192a56;" class="m-3">Aucun resultat...</h4>
        <?php endif ?>

        <div class="row"> 
            <?php $i = 0; ?>
            <?php foreach ($livres as $livre): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm bg-body-tertiary">
                        <div class="card-body" style="height: 17rem;overflow:hidden">
                        <h5><?= $livre["titre"] ?></h5>
                            <a href="<?= base_url("public/search/detailSearch/".$livre['id']); ?>"><img src="<?= $livre["image"] ?>" class="card-img-top"></a>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">prêter</a>
                        </div>
                    </div>
                </div>
                <?php $i++ ?>
            <?php endforeach; ?>
            <?php $nb = $i?>
        </div>
    </div>
    <?php require 'contact.php'?>
    <?php include "footer.php"; ?>
    <script src="js/app.js"></script>
</body>
</html>