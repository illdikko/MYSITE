<?php
$menu = [
    "Accueil"=>"/MYSITE", // paramètre de route
    "Catégorie"=>[
        "Cat1" => "?page=categories&catId=1",
        "Cat2" => "?page=categories&catId=2",
        "Cat3" => "?page=categories&catId=3" // ? = query de route, enregistré dans le $_GET
    ],
    "Contact"=>"?page=contact",
    "FAQ"=>"?page=faq"
];

?>