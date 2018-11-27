<?php

//le controlleur inclut le ou les modèles
include('Models/Film.php');
include('Models/Genre.php');


//Récupérer les données (ici, on est sur la page d'un film précis donc on récupère un seul film en fonction de l'ID)
$id = 2; //Je prends un id arbitrairement, il devra provenir de l'URL en réalité (par ex localhost/MVC2/film/2 pour l'id 2)
$movie = getOneMovie($id);

//traiter les données
$movie['realisateur'] = ucfirst($movie['realisateur']); //Mets une majuscule au nom du réalisateur


//inclure la vue
include('Views/FilmView.php');

?>