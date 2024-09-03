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
</head>
<body>
    <?php include "header.php"; ?>
    <div class="container mt-2">
        <form class="d-flex m-3" role="search" method="post" autocomplete="off">
            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-info fas fa-search" style="color: #fff;" type="submit"></button>
        </form>
        <?php if ($nb > 0): ?>
            <h4 style="color:#192a56;" class="m-3">Resultat : <?= $nb;?></h4>
        <?php else :?>
            <h4 style="color:#192a56;" class="m-3">Aucun resultat...</h4>
        <?php endif ?>

        <div class="row"> 
            <div class="col-3 mb-4">
                <div class="dropdown mb-3">
                    <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Catégorie
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Enfant</a></li>
                        <li><a class="dropdown-item" href="#">Ados</a></li>
                        <li><a class="dropdown-item" href="#">Adulte</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-3 mb-4">
                <div class="dropdown mb-3">
                    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        Date creation
                    </button>
                    <form class="dropdown-menu p-4">
                        <div class="mb-3">
                            <label for="exampleDropdownFormEmail2" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                                <label class="form-check-label" for="dropdownCheck2">
                                Remember me
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                </div>
            </div>
            <div class="col-3 mb-4">
                <div class="dropdown mb-3">
                    <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Type
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Romant</a></li>
                        <li><a class="dropdown-item" href="#">Sport</a></li>
                        <li><a class="dropdown-item" href="#">Bande dessinée</a></li>
                        <li><a class="dropdown-item" href="#">Cuisine</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-3 mb-4">
                <div class="dropdown mb-3">
                    <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Documentaire
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>

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