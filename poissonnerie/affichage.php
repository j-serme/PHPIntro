<?php


$poissons = [
    ["nom" => "Colin", "description" => "c'est un poisson gentil mais arrogant", "prix" => 43, "image" => "colin.jpg", "eau" => "mer", "protege" => false],
    ["nom" => "Carpe", "description" => "c'est un poisson tendre mais débile", "prix" => 32, "image" => "carpe.png", "eau" => "douce", "protege" => false],
    ["nom" => "Cabillaud", "description" => "c'est un poisson pilier du rayon surgelé", "prix" => 19, "image" => "cabillaud.png", "eau" => "mer", "protege" => false],
    ["nom" => "Thon", "description" => "c'est un poisson qui finit souvent en boite", "prix" => 78, "image" => "thon.png", "eau" => "mer", "protege" => false],
    ["nom" => "Truite", "description" => "c'est un poisson qui sourit à la vie", "prix" => 26, "image" => "truite.jpg", "eau" => "douce", "protege" => false],
    ["nom" => "Dauphin", "description" => "c'est un poisson qui joue au flipper", "prix" => 80, "image" => "dauphin.jpg", "eau" => "mer", "protege" => true],
    ["nom" => "Requin Marteau", "description" => "il peut faire mal aux doigts", "prix" => 95, "image" => "requin-marteau.jpg", "eau" => "mer", "protege" => true],
];


$typePoisson = false;

if (isset($_GET['type'])) {

    $typePoisson = $_GET['type'];
}



$contenuPage = "";




foreach ($poissons as $poisson) {


    $cartePoisson = "
        <div class='card text-white bg-info mb-3 col-3' style='max-width: 20rem; text-align:center'>
        <div class='card-header my-2'>{$poisson['nom']}</div>
        <div class='card-body'>
            <img src='images/{$poisson['image']}' alt='' width='220px' height='220px'>
            <h4 class='card-title my-3'>Prix AHURISSANT de : {$poisson['prix']} €</h4>
            <p class='card-text'>{$poisson['description']}</p>
            <p class='card-text'>Eau de {$poisson['eau']}</p>
        </div>
    </div>";

    if ((!$typePoisson || $typePoisson == $poisson["eau"])

        &&

        (!$poisson['protege'] || $isLoggedIn == true)
    ) {

        $contenuPage .= $cartePoisson;
    }
};
