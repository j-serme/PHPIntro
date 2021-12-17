<?php
$users = [
    [
        "username" => "patrick",
        "password" => "453e00d3552927aef900ecb6cecf4779"
    ],
    [
        "username" => "michel",
        "password" => "b44c0afd5806e0b191d2083513bed0a6"
    ],
    [
        "username" => "hubert",
        "password" => "2c4faf186b264de27be9b3a93eb33bd2"
    ],
];

$isLoggedIn = false;


$salt = "Comment est votre blanquette ?";
$saltCrypt = md5($salt);



$utilisateurInconnu = "Utilisateur Inconnu";
$mdpErrone = "Mot de passe Erroné";
$champsVides = "Veuillez renseigner tous les champs";

$messageErreur = "";



if (

    (isset($_POST['username'])) && (isset($_POST['password']))

    &&

    (!empty($_POST['username'])) && (!empty($_POST['password']))



) {

    $usernameEntre = $_POST['username'];
    $motDePasseEntre = $_POST['password'];
    $userExist = false;
    $motDePasseEnregistre;

    foreach ($users as $user) {


        if ($usernameEntre == $user['username']) {

            $userExist = true;
            $motDePasseEnregistre = $user['password'];
        };
    }


    if ($userExist) {

        if ($motDePasseEnregistre == md5($motDePasseEntre . $saltCrypt)) {
            $isLoggedIn = true;
        } else {

            $messageErreur = $mdpErrone;
        }
    } else {
        $messageErreur = $utilisateurInconnu;
    }
} else {

    $messageErreur = $champsVides;
}
