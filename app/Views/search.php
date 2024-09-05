<?php $nav = 'search'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <title>Searh</title>
    <style>
        .zoom-image {
            transition: transform 0.5s ease;
        }

        .zoom-image:hover {
            transform: scale(1.1); /* L'image sera agrandie de 20% */
        }
    </style>
</head>
<body>
    <?php include "header.php"; ?>
    <div class="container mt-3">
        <form class="row" role="search" method="post" autocomplete="off">
            <div class="col-3 mb-4">
                <select class="form-select shadow" name="categorie" aria-label="Default select example">
                    <option value="" disabled selected>Catégorie</option>
                    <option value="informatique">Informatique</option>
                    <option value="tertiere">Tertiere</option>
                </select>
            </div>
            <div class="col-3 mb-4">
                <div class="dropdown mb-3">
                    <select class="form-select shadow" name="type" aria-label="Default select example">
                        <option value="" disabled selected>Type</option>
                        <option value="romant">Romant</option>
                        <option value="informatique">Sport</option>
                        <option value="BandeDessine">Bande dessinée</option>
                        <option value="cuisine">Cuisine</option>
                        <option value="document">Document</option>
                    </select>
                </div>

            </div>
            <div class="col-3 mb-4">
                <div class="dropdown mb-3">
                    <select class="form-select shadow" name="filliere" aria-label="Default select example">
                        <option value="" disabled selected>Filliere</option>
                        <option value="IGGLIA">IGGLIA</option>
                        <option value="ISSAIA">ISSAIA</option>
                        <option value="ESSIA">ESSIA</option>
                        <option value="IMTICIA">IMTICIA</option>
                        <option value="BIO">BIO</option>
                        <option value="EMI">EMI</option>
                        <option value="GCA">GCA</option>
                        <option value="TOUR">TOUR</option>
                    </select>
                </div>
            </div>
            <div class="col-3 mb-4">
                <div class="dropdown mb-3">
                    <div class="d-flex">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-info fas fa-search" style="color: #fff;" type="submit"></button>
                    </div>
                </div>
            </div>
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
                            <a href="<?= base_url("public/search/detailSearch/".$livre['id']); ?>"><img src="<?= $livre["image"] ?>" class="card-img-top zoom-image"></a>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-info">prêter</a>
                        </div>
                    </div>
                </div>
                <?php $i++ ?>
            <?php endforeach; ?>
            <?php $nb = $i?>
        </div>
    </div>
    <?php include "footer.php"; ?>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>