<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <title>userUpdate</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="container">
                <h1>Create membre</h1>
                <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control" id="username" value="<?= $user['username'] ?>" placeholder="name@example.com" required>
                    <label for="username">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="email" value="<?= $user['email'] ?>" placeholder="name@example.com" required>
                    <label for="email">Email address</label>
                </div>
                <button class="btn btn-outline-primary" type="submit">Update</button>
            </div>
        </form>
    </div>
</body>
</html>