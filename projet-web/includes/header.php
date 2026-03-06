<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : "Accueil - Département Informatique EFREI"; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="main-header">
        <a href="https://www.efrei.fr">
            <div class="header-logo-container"> 
                <img src="img/image_efrei.png" alt="Logo EFREI" class="header-logo">
            </div>
        </a>
        <div class="header-banner">
            <h1 class="header-title">Efrei - Département informatique</h1>
        </div>
        <button id="theme-toggle" class="theme-btn">🌕</button>
        <div id="openMenu" class="menu-btn" onclick="openNav()">☰</div>
    </header>

    <div id="mySidebar" class="sidebar">
        <span class="closebtn" onclick="closeNav()">×</span>
        <h2>Navigation</h2>
        <a href="acceuil.php">Accueil</a>
        <a href="cours_et_formation.php">Formation et cours</a>
        <a href="equipe_enseignante.php">Équipe</a>
        <a href="contact.php">Contactez-nous</a>
        <a href="apropos.php">À propos de nous</a>
    </div>
    <div id="overlay" class="overlay" onclick="closeNav()"></div>