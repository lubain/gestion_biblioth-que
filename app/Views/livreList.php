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
    <?php include "headerAdmin.php"; ?>
    <div class="container mt-2">
        <form class="d-flex m-3" role="search" method="post">
            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success fas fa-search" type="submit"></button>
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
                    <th>autheur</th>
                    <th>dateDePret</th>
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
                        <td><?= $row['autheur'] ?></td>
                        <td><?= $row['dateDePret'] ?></td>
                        <td><?= $row['isDispo'] ?></td>
                        <td><img src="<?= $row['image'] ?>" width="40" height="40" alt=""></td>
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
    <script src="js/app.js"></script>
</body>
</html>