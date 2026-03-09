<?php
function getFormations() {
    $chemin = 'data/formations.json';
    
    if (!file_exists($chemin)) {
        return [
            "prepas" => [],
            "bachelors" => [],
            "ingenieur" => []
        ];
    }
    
    $contenu = file_get_contents($chemin);
    $donnees = json_decode($contenu, true);
    
    return $donnees;
}

function nettoyer($entree) {
    return htmlspecialchars(trim($entree));
}
?>