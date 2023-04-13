<?php
function drapeau($pays) {
    switch($pays){
        case 'fr':
            return "FR";
        case 'en':
            return "EN";
        case 'es':
            return 'en';
    }
}

function filtre_hello_world($v, $add){
	return "Titre:" . $v . ' // Suivi de: ' . $add;
}
?>