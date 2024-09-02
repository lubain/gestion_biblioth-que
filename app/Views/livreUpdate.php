<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <title>Update</title>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="container">
                <h1>Update livre</h1>
                <div class="form-floating mb-3">
                    <input type="text" name="titre" class="form-control" id="titre" value="<?= $livre['titre'] ?>" placeholder="name@example.com" required>
                    <label for="titre">Titre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="autheur" class="form-control" id="autheur" value="<?= $livre['autheur'] ?>" placeholder="name@example.com" required>
                    <label for="autheur">autheur</label>
                </div>
                <button class="btn btn-outline-primary" type="submit">Update</button>
            </div>
        </form>
    </div>
</body>
</html>