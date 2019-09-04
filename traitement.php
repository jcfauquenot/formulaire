<?php
// On nettoie les données pour enlever ls html 
foreach ($_POST as $key => $value) {
    $post[$key] = trim(strip_tags($value));
    // on récupère du tableau initial un nouveau tableau perso avec mes nouvelles données sans html ni espaces... puis on vérifie
}

// on initialise un tableau qui réucpére les erreurs de saisir 
$errors = [];

// on verifie que le mail est bien formaté
if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "ce n'est pas une adresse valide";
}

// on verifie le formatage des donnée nom et un nombre 20 maximum de caractères
if (!preg_match("#^[a-zA-Z0-9-\.:\!\?\&',\s]{5,}#", $post['name'])) {
    $errors[] = "Le nom doit avoir au minimum 5 caractères";
}

// on verifie le formatage des donnée prénom et un nombre maximum de caractères
if (!preg_match("#^[a-zA-Z0-9-\.:\!\?\&',\s]{5,}#", $post['prenom'])) {
    $errors[] = "Le prenom doit comporter au minimum 5 caractères";
}

// on verifie le formatage des donnée message et un nombre maximum de caractères
if (!preg_match("#^[a-zA-Z0-9-\.:\!\?\&',\s]{25,}#", $post['message'])) {
    $errors[] = "Le message doit comporter au minimum 25 caractères";
}

$a = count($errors);

// on parcoure la table des erreurs et on les affichent 
if (count($errors) > 0) {
    foreach ($errors as $error) {
        echo "<h1>" . $error . "</h1>";
    };
} else {
    // on renvoit la page de félicitation 
    header('location: message.php');
    exit;
}
