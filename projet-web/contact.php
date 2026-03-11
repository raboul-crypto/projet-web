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

<main class="contact-container">

    <section class="form-section content-block">
        <h2 class="contact-form-title">&#9993; Contactez-nous</h2>

        <?php if ($confirmation): ?>
            <div class="confirmation-msg">
                <strong>Succès !</strong> <?php echo $confirmation; ?>
            </div>
        <?php endif; ?>

        <form action="contact.php" method="POST">
            <label for="nom">Nom complet</label>
            <input type="text" id="nom" name="nom" required placeholder="Votre nom">

            <label for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email" required placeholder="votre.email@exemple.com">

            <label for="message">Sujet de votre message</label>
            <textarea id="message" name="message" rows="7" required placeholder="Comment pouvons-nous vous aider ?"></textarea>

            <button type="submit" class="btn-send">Envoyer ma demande &#10148;</button>
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