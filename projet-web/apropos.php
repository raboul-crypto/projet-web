<?php 
  $pageTitle = "À Propos - Projet Site Vitrine EFREI";
  include('includes/header.php'); 
?>

<main>

    <!-- Présentation du projet -->
    <section class="content-block">
        <h2>À Propos du Projet</h2>
        <p>
            Ce site vitrine est un projet étudiant réalisé dans le cadre du cours <strong>XTI205-DEV</strong> 
            à l'EFREI Paris. Il présente le département informatique de l'école : ses formations, 
            son équipe enseignante et ses coordonnées.
        </p>
        <p>
            Le site est développé en <strong>HTML5, CSS3, JavaScript et PHP</strong>, 
            sans framework, conformément aux consignes du cours.
        </p>

        <hr class="separator">

        <!-- Tableau récapitulatif des technos utilisées -->
        <h3 style="color: var(--primary-color); margin-bottom: 15px;">Technologies utilisées</h3>
        <table class="tableau-formations">
            <thead>
                <tr>
                    <th>Technologie</th>
                    <th>Utilisation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>HTML5</td>
                    <td>Structure sémantique des pages</td>
                </tr>
                <tr>
                    <td>CSS3</td>
                    <td>Mise en page, responsive, dark mode</td>
                </tr>
                <tr>
                    <td>JavaScript</td>
                    <td>Carousel, sidebar, modal, easter eggs</td>
                </tr>
                <tr>
                    <td>PHP</td>
                    <td>Includes, formulaire de contact, lecture JSON</td>
                </tr>
                <tr>
                    <td>JSON</td>
                    <td>Stockage et affichage dynamique des formations</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="content-block">
        <h2>L'Équipe du Projet</h2>

        <div class="apropos-grid">

            <div class="apropos-card">
                <div class="apropos-card-header">
                    <div class="apropos-photo-wrapper">
                        <img src="img/rabah.png" alt="Photo de Rabah BEN ABDELAZIZ">
                    </div>
                </div>
                <div class="apropos-card-body">
                    <h3>Rabah BEN ABDELAZIZ</h3>
                    <p class="apropos-role">Chef de projet</p>
                    <hr class="separator">
                    <p><strong>Formation :</strong> B1 DEV — EFREI Paris</p>
                    <p><strong>Pages réalisées :</strong> Accueil, À propos, Header/Footer</p>
                    <p><strong>Design :</strong> design partagée</p>
                </div>
            </div>

            <div class="apropos-card">
                <div class="apropos-card-header">
                    <div class="apropos-photo-wrapper">
                        <img src="img/theo.jpg" alt="Photo de Theo VANDE ROSIEREN">
                    </div>
                </div>
                <div class="apropos-card-body">
                    <h3>Theo VANDE ROSIEREN</h3>
                    <p class="apropos-role">Développeur</p>
                    <hr class="separator">
                    <p><strong>Formation :</strong> B1 DEV — EFREI Paris</p>
                    <p><strong>Pages réalisées :</strong> Cours & Formations, Équipe enseignante, Pages secrètes, Contact</p>
                    <p><strong>Design :</strong> design partagée</p>
                </div>
            </div>

        </div>
    </section>

</main>

<?php include('includes/footer.php'); ?>
