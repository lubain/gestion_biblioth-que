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
            <form class="row g-3 needs-validation" method="post" enctype="multipart/form-data">
                <div class="col-md-4 position-relative">
                    <label for="username" class="form-label">username</label>
                    <input type="text" name="username" class="form-control" id="username" required>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="email" class="form-label">email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="password" class="form-label">password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
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