<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.css">
</head>
<body>
    <?php include "headerAdmin.php"; ?>
    <h1>Welcomme to admin page</h1>
    <p>
    <?php
        $dateDePret = new DateTime("2024-08-31");
        $now = date('Y-m-d H:i:s');
        $date = new DateTime($now);
        
        $interval = $dateDePret->diff($date);
        
        // Convertir la différence en secondes
        $seconds = $interval->days * 24 * 60 * 60 +
                   $interval->h * 60 * 60 +
                   $interval->i * 60 +
                   $interval->s;
        
        echo "Le nombre de secondes écoulées entre les deux dates est : $seconds\n";
        if ($seconds < 864000) {
            echo "il vous reste du jour";
        }
    ?>
    </p>
    <img src="img/logo.png" alt="" height="50%">
</body>
</html>