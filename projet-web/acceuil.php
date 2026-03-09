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
                <p>Fondée en 1936, l’Efrei n’a eu de cesse d’évoluer au fil des avancées technologiques. Elle est
                    devenue l’école référente dans le numérique et compte désormais plus de 16 000 alumni. École
                    composante du grand établissement Panthéon-Assas Université, nos diplômes sont reconnus en
                    France et à l’international.</p>
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

            <button class="prev" onclick="moveSlide(-1)">❮</button>
            <button class="next" onclick="moveSlide(1)">❯</button>
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
                    prochainement dans l'amphithéatre principal</p>
            </article>
        </div>
    </section>

    <section class="info-section-container" style="display: flex; flex-direction: column; gap: 30px; margin-top: 30px;">

        <div class="stat-card-compact"
            style="background-color: var(--secondary-color); color: var(--text-light); padding: 30px; border-radius: var(--border-radius); text-align: center;">
            <h3 style="color: var(--accent-color); margin-bottom: 20px; font-size: 1.8rem;">Chiffres Clés</h3>
            <div class="stat-grid"
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 15px;">
                <p><strong>16000</strong> alumnis</p>
                <p><strong>6000</strong> étudiants</p>
                <p><strong>2000</strong> entreprises</p>
                <p><strong>150</strong> intervenants</p>
                <p><strong>2</strong> campus</p>
                <p><strong>108</strong> établissements partenaires</p>
            </div>
        </div>

        <div class="history-module-small"
            style="background-color: var(--card-bg); border: 1px solid var(--border-color); border-radius: var(--border-radius); padding: 30px; box-shadow: var(--shadow-card);">
            <div class="history-header">
                <span class="history-tag"
                    style="color: var(--accent-color); font-weight: bold; font-size: 0.8rem; letter-spacing: 1px;">HISTOIRE
                    DE L'EFREI</span>
                <h4 class="history-main-title" style="color: var(--primary-color); margin: 10px 0; font-size: 1.4rem;">
                    90 ans au service de l'innovation</h4>
            </div>

            <div class="history-flex-content"
                style="display: flex; flex-wrap: wrap; gap: 20px; align-items: center; margin-top: 20px;">
                <div class="history-image-container" style="flex: 1; min-width: 200px; display: none;">
                    <img id="display-img" src="img/efrei_1936.png" alt="Illustration historique"
                        style="width: 100%; border-radius: 8px; transition: opacity 0.4s;">
                </div>

                <div id="timeline-data" class="timeline-compact fade" style="flex: 1; min-width: 250px;">
                    <div class="year-row"
                        style="display: flex; align-items: center; justify-content: center; gap: 20px; margin-bottom: 10px;">
                        <button class="nav-arrow" onclick="changeTimeline(-1)"
                            style="cursor: pointer; padding: 5px 10px;">←</button>

                        <h2 class="timeline-year-small" id="display-year"
                            style="color: var(--primary-color); margin: 0; font-size: 2rem; min-width: 100px; text-align: center;">
                            1936</h2>

                        <button class="nav-arrow" onclick="changeTimeline(1)"
                            style="cursor: pointer; padding: 5px 10px;">→</button>
                    </div>
                    <h5 id="display-title" class="event-title" style="margin: 10px 0; font-size: 1.1rem;">Création de l'EFR</h5>
                    <p id="display-text" class="text-small" style="font-size: 0.9rem; line-height: 1.4;">
                        L'école EFR est créée à Paris par Ernest Lavigne pour répondre aux besoins en radioélectricité.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
<section class="content-block">
    <h2>Vie du Département</h2>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
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

<?php include('includes/footer.php'); ?>