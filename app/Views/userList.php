<?php $nav = 'm'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <title>user List</title>
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
        <a href="createUser">
            <i class="fas fa-plus btn btn-primary" title="ajout"></i>
        </a>
        <table class="table table-striped table-hover">
            <thead>
                <tr class="tr">
                    <th>id</th>
                    <th>username</th>
                    <th>email</th>
                    <th>option</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($user as $row):?>
                    <tr class="tr">
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['username'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td>
                            <a href="<?= base_url("public/update/user/".$row['id']); ?>" style="color: blue;">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="<?= base_url("public/delete/user/".$row['id']); ?>">
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