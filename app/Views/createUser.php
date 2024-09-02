<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create membre</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <form action="" method="post">
                    <div class="container">
                        <h1>Create membre</h1>
                        <div class="form-floating mb-3">
                            <input type="text" name="username" class="form-control" id="username" placeholder="name@example.com" required>
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        <button class="btn btn-outline-primary" type="submit">Connexion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>