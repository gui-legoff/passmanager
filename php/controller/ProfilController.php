<?php

// Image de profil

$idUser = $aUserData['id'];

// Chemin du dossier ou sont stocké les images
$pathFolderImage = "media/img/users/";
// Path complet du fichier image
$pathFieldImage = $pathFolderImage.$idUser.'_profil.jpg'; 

// Shuffle
$numbers = range(1,10);
shuffle($numbers);
$numbers = current($numbers);
// End shuffle

if(file_exists($pathFieldImage)){
    $imageProfil = $pathFieldImage.'?'.$numbers;
}else{
    $imageProfil = 'media/img/users/default.jpg';
}