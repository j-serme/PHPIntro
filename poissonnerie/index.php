<?php
if (!isset($_SESSION['isLoggedIn'])) {
    session_start();
};
require_once "connexion.php";

$_SESSION["isLoggedIn"] = true;
$_SESSION["isLoggedIn"] ? $isLoggedIn = true : $isLoggedIn = false;

require_once "affichage.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POISSON 2000</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/simplex/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/HB/poissonnerie">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/HB/poissonnerie">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Poissons</a>
                    </li>
                    <li>
                        <form class='d-flex' method='post'>
                            <div class='form-group'>
                                <input type='text' name='username' placeholder='username'>
                            </div>
                            <div class='form-group'>
                                <input type='text' name='password' placeholder='password'>
                            </div>
                            <button>GO !</button>
                            <?= $messageErreur ?>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="">

        <button type="submit" class="btn btn-dark"><a href="/HB/poissonnerie">Tous les poissons</a></button>
        <form><button type="submit" class="btn btn-primary" name="type" value="mer">Eau de Mer</button></form>
        <form><button type="submit" class="btn btn-info" name="type" value="douce">Eau Douce</button></form>
    </div>

    <div class="container row mx-auto">



        <?php echo $contenuPage; ?>

    </div>


</body>

</html>