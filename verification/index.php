<?php require_once "logique.php" ?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="https://bootswatch.com/5/pulse/bootstrap.min.css">
    
    <title>Verification</title>
</head>
<body>
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/HB/verification">Verification</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
        </div>
    </div>
    </nav>

    <div>
        <?= $contenuDeLaPage ?>
        <?= $messageErreur ?>
    </div>

</body>
</html>