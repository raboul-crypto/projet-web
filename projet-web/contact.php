<?php 
    $pageTitle = "Contact - Département Informatique EFREI";
    include('includes/header.php'); 
    $confirmation = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        
        $confirmation = "Merci $nom, votre message a bien été reçu ! Notre équipe reviendra vers vous à l'adresse $email.";
    }
?>

<main style="max-width: 1200px; margin: 40px auto; display: flex; gap: 30px; padding: 20px; align-items: stretch; font-family: sans-serif;">

    <section class="content-block" id="section-contact">
        <h2 style="color: #002b5c; margin-top: 0; display: flex; align-items: center; gap: 15px; font-size: 2rem;">
            <span style="font-size: 1.2em;">✉️</span> Contactez-nous
        </h2>

        <?php if ($confirmation): ?>
            <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 12px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
                <strong>Succès !</strong> <?php echo $confirmation; ?>
            </div>
        <?php endif; ?>

        <form action="contact.php" method="POST">
            <label style="display: block; margin: 25px 0 10px; font-weight: bold; color: #333; font-size: 1.1rem;">Nom complet</label>
            <input type="text" name="nom" required placeholder="Votre nom" style="width: 100%; padding: 15px; border-radius: 12px; border: 1px solid #ddd; box-sizing: border-box; font-size: 1rem;">

            <label style="display: block; margin: 25px 0 10px; font-weight: bold; color: #333; font-size: 1.1rem;">Adresse e-mail</label>
            <input type="email" name="email" required placeholder="votre.email@exemple.com" style="width: 100%; padding: 15px; border-radius: 12px; border: 1px solid #ddd; box-sizing: border-box; font-size: 1rem;">

            <label style="display: block; margin: 25px 0 10px; font-weight: bold; color: #333; font-size: 1.1rem;">Sujet de votre message</label>
            <textarea name="message" rows="7" required placeholder="Comment pouvons-nous vous aider ?" style="width: 100%; padding: 15px; border-radius: 12px; border: 1px solid #ddd; box-sizing: border-box; resize: vertical; font-size: 1rem;"></textarea>

            <button type="submit" style="width: 100%; background-color: #d32f2f; color: white; padding: 18px; border: none; border-radius: 12px; font-weight: bold; font-size: 1.1rem; margin-top: 35px; cursor: pointer; transition: 0.3s;">
                Envoyer ma demande <span style="margin-left: 10px;">➤</span>
            </button>
        </form>
    </section>

    <aside class="info-section">

        <div class="info-card">
            <div class="icon-circle">&#128222;</div>
            <div>
                <h4>Téléphone</h4>
                <p>+33 188 289 000</p>
            </div>
        </div>

        <div class="info-card">
            <div class="icon-circle">&#128205;</div>
            <div>
                <h4>Adresse Campus</h4>
                <p>
                    <a href="https://www.google.fr/maps/place/30-32+Av.+de+la+R%C3%A9publique,+94800+Villejuif/" target="_blank">
                        30-32 Av. de la République, Villejuif
                    </a>
                </p>
            </div>
        </div>

        <div class="info-card transport-card">
            <div class="icon-circle">&#128652;</div>
            <div>
                <h4>Venir au campus</h4>
                <p>Métro : Ligne 7, future Ligne 15</p>
                <p>Bus : 131, 185</p>
            </div>
        </div>

        <div class="hours-card">
            <h4>Horaires d'accueil</h4>
            <p>Lundi - Vendredi : 8h00 - 19h00</p>
            <p>Samedi : 9h00 - 13h00</p>
            <p>Dimanche : Fermé</p>
        </div>

    </aside>

</main>

<?php include('includes/footer.php'); ?>