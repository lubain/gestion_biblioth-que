<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Sign up</title>
<body>
<div class="container mt-3 mb-4" id="contact">
    <div class="card shadow p-3 mb-5 bg-body-tertiary">
        <div class="card-body">
            <form class="row g-3 needs-validation" method="post">
                <div class="col-md-3 position-relative">
                    <label for="nom" class="form-label">nom</label>
                    <input type="text" name="nom" class="form-control" id="nom" required>
                </div>
                <div class="col-md-3 position-relative">
                    <label for="prenom" class="form-label">prenom</label>
                    <input type="text" name="prenom" class="form-control" id="prenom" required>
                </div>
                <div class="col-md-3 position-relative">
                    <label for="filliere" class="form-label">Filliere</label>
                    <select name="filliere" class="form-select" aria-label="Default select example" id="filliere" required>
                        <option value="informatique" selected>Informatique</option>
                        <option value="tertiere">Tertiere</option>
                    </select>
                </div>
                <div class="col-md-3 position-relative">
                    <label for="numero" class="form-label">numero</label>
                    <input type="text" name="numero" class="form-control" id="numero" required>
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
                        <option value="bandeDessinee">Document</option>
                    </select>
                </div>
                <div class="col-12">
                    <button class="btn btn-success" type="submit"><i class="fas fa-paper-plane"></i> Creer</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>