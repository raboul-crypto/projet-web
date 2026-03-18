<?php
function getFormations() {
    $contenu = file_get_contents('data/formations.json');
    $donnees = json_decode($contenu, true);
    return $donnees;
}

function nettoyer($entree) {
    return htmlspecialchars(trim($entree));
}
?>