<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Detail search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/all.css">
    <link rel="stylesheet" href="../../css/fontawesome.css">
</head>
<body>
    <?php require 'header.php'?>
    <div style="height:30rem;display:flex;align-items:center;justify-content:center">
        <img src="../../<?= $livre["image"] ?>" style="max-width:98%;max-height:90%" alt="">
    </div>
    <h4 style="color: #192a56;">Titre : <?= $livre["titre"] ?></h4>
    <h4 style="color: #192a56;">Autheur : <?= $livre["autheur"] ?></h4>
    <form action="" method="post" class="m-3">
        <?php if($livre["isDispo"] == 1):?>
            <input type="submit" class="btn btn-primary" value="Emprunter">
        <?php else:?>
            <h3 class="btn btn-primary">Delais de pret non expirée <i class="fas fa-hourglass-half"></i></h3>
            <h3>le livre sera disponible a partir de <?= $livre["dateDePret"] ?></h3>
        <?php endif;?>
    </form>
    <?php require 'contact.php'?>
    <?php require 'footer.php'?>
</body>
</html>