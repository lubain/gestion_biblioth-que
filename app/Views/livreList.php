<?php $nav = 'p'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <title>Document</title>
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
        <?php if ($nb>0):?>
            <h4>Resultat : <?= $nb;?></h4>
        <?php else:?>
            <h4>Aucune resultat...</h4>
        <?php endif?>
        <a href="createLivre">
            <i class="fas fa-plus btn btn-primary"></i>
        </a>
        <table class="table table-striped table-hover">
            <thead>
                <tr class="tr">
                    <th>id</th>
                    <th>titre</th>
                    <th>auteur</th>
                    <th>categorie</th>
                    <th>type</th>
                    <th>dateDePret</th>
                    <th>dateDeRetour</th>
                    <th>status</th>
                    <th>image</th>
                    <th>option</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($livre as $row):?>
                    <tr class="tr">
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['titre'] ?></td>
                        <td><?= $row['auteur'] ?></td>
                        <td><?= $row['categorie'] ?></td>
                        <td><?= $row['type'] ?></td>
                        <td><?= $row['dateDePret'] ?></td>
                        <td><?= $row['dateDeRetour'] ?></td>
                        <td><?= $row['isDispo'] ?></td>
                        <td>
                            <div type="button" data-bs-toggle="modal" data-bs-target="#maModal<?=$row['id']?>">
                                <img src="<?= $row['image'] ?>" width="40" height="40" alt="">
                            </div>
                            <div class="modal fade" id="maModal<?=$row['id']?>" tabindex="-1" aria-labelledby="titreModal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?= $row['image'] ?>" width="100%" height="100%" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="<?= base_url("public/update/livre/".$row['id']); ?>" style="color: blue;">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="<?= base_url("public/delete/livre/".$row['id']); ?>">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php include "footer.php"; ?>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>