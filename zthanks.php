<?php

const BR = "<br />";

$errors = '';

if (empty($_POST['user_name'])) {
    echo $errors = 'merci de renseigner votre nom ';
    echo BR;
}

if (empty($_POST['user_firstname'])) {
    echo $errors = 'merci de renseigner votre prénom ';
    echo BR;
}

if (empty($_POST['user_theme_choice'])) {
    echo $errors = 'merci de renseigner votre choix ';
    echo BR;
}

if (empty($_POST['user_email'])) {
    echo $errors = 'merci de renseigner votre mail ';
    echo BR;
} elseif (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
    echo $errors = "format de mail invalide";
    echo BR;
}

if (empty($_POST['user_tel_number'])) {
    echo $errors = 'merci de renseigner votre téléphone ';
    echo BR;
}

if(empty($errors)) {
    echo 'Merci ' . $_POST['user_firstname'] . ' ' . $_POST['user_name'] . ' de nous avoir contactés à propos de ' . $_POST['user_theme_choice'] . '.'; 
echo BR;
echo BR;
echo 'Un de nos conseillers vous contactera soit à l’adresse ' . $_POST['user_email'] . ' ou par téléphone au ' . $_POST['user_tel_number'] . 
' dans les plus brefs délais pour traiter votre demande. '; 
echo BR;
echo BR;
echo $_POST['user_message'];
}


?>
