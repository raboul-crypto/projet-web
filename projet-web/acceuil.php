<?php
$pageTitle = "Accueil - Département Informatique EFREI";
include('includes/header.php');
?>

<main>
    <section class="content-block" id="bienvenue">
        <div class="block-header">
            <h2>Bienvenue sur le site du département Informatique de l'EFREI</h2>
            <img src="img/pantheon-icon.png" alt="" class="watermark">
        </div>
        <div class="news-container">
            <article>
                <p>Fondée en 1936, l'Efrei n'a eu de cesse d'évoluer au fil des avancées technologiques. Elle est
                    devenue l'école référente dans le numérique et compte désormais plus de 16 000 alumni. École
                    composante du grand établissement Panthéon-Assas Université, nos diplômes sont reconnus en
                    France et à l'international.</p>
            </article>
        </div>
    </section>

    <section class="content-block" id="projets">
        <div class="block-header">
            <h2>Nos Projets</h2>
            <img src="img/pantheon-icon.png" alt="" class="watermark">
        </div>
        <div class="carousel-container">
            <div id="carousel">
                <img src="img/image_carrousel-1.jpg" alt="Projet 1" class="slide active">
                <img src="img/image_carrousel-2.jpg" alt="Projet 2" class="slide">
                <img src="img/image_carrousel-3.jpg" alt="Projet 3" class="slide">
                <img src="img/image_carrousel-4.jpg" alt="Projet 4" class="slide">
                <img src="img/image_carrousel-5.jpg" alt="Projet 5" class="slide">
            </div>
            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>
    </section>

    <section class="content-block" id="actualites">
        <div class="block-header">
            <h2>Actualités du département</h2>
            <img src="img/pantheon-icon.png" alt="" class="watermark">
        </div>
        <div class="news-container">
            <article>
                <h3>Journée Portes Ouvertes</h3>
                <p><strong>Date :</strong> 15 Mars 2026. Venez découvrir nos laboratoires et échanger avec les
                    étudiants du département Informatique.</p>
            </article>
            <hr class="separator">
            <article>
                <h3>Conférence Cybersécurité</h3>
                <p>Une conférence exceptionnelle sur les enjeux de l'IA dans la sécurité numérique aura lieu
                    prochainement dans l'amphithéatre principal.</p>
            </article>
        </div>
    </section>

    <section class="content-block" id="chiffres">
        <h2>Chiffres Clés</h2>
        <div class="stat-grid">
            <div class="stat-item"><strong>16 000</strong><p>Alumni</p></div>
            <div class="stat-item"><strong>6 000</strong><p>Étudiants</p></div>
            <div class="stat-item"><strong>2 000</strong><p>Entreprises</p></div>
            <div class="stat-item"><strong>150</strong><p>Intervenants</p></div>
            <div class="stat-item"><strong>2</strong><p>Campus</p></div>
            <div class="stat-item"><strong>108</strong><p>Établissements partenaires</p></div>
        </div>
    </section>

    <section class="content-block" id="histoire">
        <span class="history-tag">HISTOIRE DE L'EFREI</span>
        <h2>90 ans au service de l'innovation</h2>

        <div id="timeline-data" class="timeline-compact">
            <div class="year-row">
                <button class="nav-arrow" onclick="changeTimeline(-1)">&#8592;</button>
                <h2 id="display-year" class="timeline-year-small">1936</h2>
                <button class="nav-arrow" onclick="changeTimeline(1)">&#8594;</button>
            </div>
            <h4 id="display-title" class="event-title">Création de l'EFR</h4>
            <p id="display-text" class="text-small">
                L'école EFR est créée à Paris par Ernest Lavigne pour répondre aux besoins en radioélectricité.
            </p>
        </div>
    </section>

    <section class="content-block" id="vie-departement">
        <h2>Vie du Département</h2>
        <div class="info-globale">
            <div>
                <h4>Installations</h4>
                <p>Labs informatiques modernes, accès Openclassrooms et LinkedIn Learning.</p>
            </div>
            <div>
                <h4>Associations</h4>
                <p>Clubs de robotique, e-sport et Cybersécurité (CTF).</p>
            </div>
        </div>
    </section>

    <section class="content-block" id="visite-virtuelle">
        <div class="block-header">
            <h2>Visite Virtuelle du Campus</h2>
            <img src="img/pantheon-icon.png" alt="" class="watermark">
        </div>
        <div class="video-container">
            <iframe
                src="https://www.virteem.com/galerie360/visites/efrei/index.htm#media=1"
                title="Visite virtuelle du campus EFREI"
                allowfullscreen>
            </iframe>
        </div>
        <p class="visite-hint">Passez en plein écran pour une meilleure immersion.</p>
    </section>

</main>

<?php include('includes/footer.php'); ?>