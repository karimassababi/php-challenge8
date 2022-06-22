<?php
const BR = "<br />";

echo 'Merci ' . $_POST['user_firstname'] . ' ' . $_POST['user_name'] . ' de nous avoir contactés à propos de ' . $_POST['user_theme_choice'] . '.'; 
echo BR;
echo BR;
echo 'Un de nos conseillers vous contactera soit à l’adresse ' . $_POST['user_email'] . ' ou par téléphone au ' . $_POST['user_tel_number'] . 
' dans les plus brefs délais pour traiter votre demande. '; 
echo BR;
echo BR;
echo $_POST['user_message'];

?>