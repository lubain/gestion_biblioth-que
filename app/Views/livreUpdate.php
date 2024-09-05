<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/main.css">
    <title>Update</title>
<body>
    <div class="container mt-3 mb-4 d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card shadow p-3 mb-5 bg-body-tertiary">
            <div class="card-body">
                <form class="row g-3 needs-validation" method="post">
                    <div class="col-md-6 position-relative">
                        <label for="titre" class="form-label">Titre</label>
                        <input type="text" value="<?= $livre['titre'] ?>" name="titre" class="form-control" id="titre" required>
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="auteur" class="form-label">Auteur</label>
                        <input type="text" value="<?= $livre['auteur'] ?>" name="auteur" class="form-control" id="auteur" required>
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="categorie" class="form-label">Categorie</label>
                        <select name="categorie" class="form-select" aria-label="Default select example" id="categorie" required>
                            <option value="informatique" selected>Informatique</option>
                            <option value="tertiere">Tertiere</option>
                        </select>
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="type" class="form-label">Type</label>
                        <select name="type" class="form-select" aria-label="Default select example" id="type" required>
                            <option value="romant" selected>Romant</option>
                            <option value="sport">Sport</option>
                            <option value="cuisine">Cuisine</option>
                            <option value="bandeDessinee">Bande dessinee</option>
                            <option value="document">Document</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>