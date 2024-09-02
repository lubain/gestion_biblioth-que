<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Create</title>
<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="container">
                <h1>Create livre</h1>
                <div class="form-floating mb-3">
                    <input type="text" name="titre" class="form-control" id="titre" placeholder="name@example.com" required>
                    <label for="titre">Titre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="autheur" class="form-control" id="autheur" placeholder="name@example.com" required>
                    <label for="autheur">autheur</label>
                </div>
                <div class="mb-3">
                    <input type="file" name="image" class="form-control" required>
                </div>
                <button class="btn btn-outline-primary" type="submit">Create</button>
            </div>
        </form>
    </div>
</body>
</html>