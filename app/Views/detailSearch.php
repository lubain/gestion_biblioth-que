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
    <h4 style="color: #192a56;">Auteur : <?= $livre["auteur"] ?></h4>
    <h4 style="color: #192a56;">Categorie : <?= $livre["categorie"] ?></h4>
    <h4 style="color: #192a56;">Type : <?= $livre["type"] ?></h4>
    <form action="" method="post" class="m-3">
        <?php if($livre["isDispo"] == 1):?>
            <input type="submit" class="btn btn-primary" value="Emprunter">
        <?php else:?>
            <h3 class="btn btn-primary">Delais de pret non expirée </h3>
            <h3>le livre sera disponible a partir de <span id="dateDeRetour"><?= $livre["dateDeRetour"] ?></span></h3>
            <p id="timer"></p>
        <?php endif;?>
    </form>
    <?php require 'footer.php'?>
    <script>
        function calculateTimeRemaining(endDate) {
            const now = new Date().getTime();
            const distance = endDate.getTime() - now;

            if (distance <= 0) {
                return {
                    days: 0,
                    hours: 0,
                    minutes: 0,
                    seconds: 0,
                };
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            return {
                days,
                hours,
                minutes,
                seconds,
            };
        }

        function displayTimeRemaining(endDate,timerElement) {
            const timeRemaining = calculateTimeRemaining(endDate);
            currentDate = `Temps restant : ${timeRemaining.days} jours, ${timeRemaining.hours} heures, ${timeRemaining.minutes} minutes, ${timeRemaining.seconds} secondes`;
            console.log(`Temps restant : ${timeRemaining.days} jours, ${timeRemaining.hours} heures, ${timeRemaining.minutes} minutes, ${timeRemaining.seconds} secondes`);
            timerElement.textContent = currentDate.toLocaleString();
        }

        const dateDeRetour = document.getElementById('dateDeRetour').textContent;
        const targetDate = new Date(dateDeRetour);
        let timerElement = document.getElementById('timer');

        setInterval(() => {
            displayTimeRemaining(targetDate,timerElement);
        }, 1000);

    </script>
</body>
</html>