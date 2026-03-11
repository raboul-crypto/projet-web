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

    <section style="flex: 2.5; background: white; padding: 50px; border-radius: 25px; box-shadow: 0 10px 40px rgba(0,0,0,0.3);">
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

    <aside style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
        <div style="background: white; padding: 20px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); display: flex; align-items: center; gap: 15px;">
            <div style="background: #ffebee; color: #d32f2f; width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">📞</div>
            <div>
                <h4 style="margin: 0; color: #002b5c;">Téléphone</h4>
                <p style="margin: 5px 0 0; color: #666; font-size: 0.9rem;">+33 188 289 000</p>
            </div>
        </div>

        <div style="background: white; padding: 20px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); display: flex; align-items: center; gap: 15px;">
            <div style="background: #ffebee; color: #d32f2f; width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">📍</div>
            <div>
                <h4 style="margin: 0; color: #002b5c;">Adresse Campus</h4>
                <p style="margin: 5px 0 0; color: #666; font-size: 0.9rem;">
                    <a href="https://earth.google.com/web/search/30-32+Av.+de+la+R%c3%a9publique/@48.7885011,2.36363684,101.75355606a,0d,60y,7.72464004h,105.63056706t,0r/data=CooBGlwSVgolMHg0N2U2NzNlMjRlODQ2NWIzOjB4NWY0OTQzMDBmOWMyOGI5YhlHYc239GRIQCEXBQtx9ugCQCobMzAtMzIgQXYuIGRlIGxhIFLDqXB1YmxpcXVlGAEgASImCiQJDH103SFvRkARuQBR9WduRkAZXKTz-_rG4b8hts2qYRIP4r9CAggBIhoKFjFfRVZNWllqMF8yVjkxWmVqY3VuSFEQAjoDCgEwQgIIAEoNCP___________wEQAA" target="_blank" style="text-decoration: none; color: inherit;">
                        <p>30-32 Av. de la République, Villejuif</p>
                    </a>
                    <a href="https://earth.google.com/web/search/83+Rue+Lucien+Faure,+33000+Bordeaux/@44.86538428,-0.55993967,6.21398208a,0d,88.33793024y,37.08977812h,97.98464222t,0r/data=CpEBGmMSXQokMHhkNTUyODhiNzY4OWEzZGY6MHhjYjEyMmYxMzYwNGI2NDJmGQ34oXfPbkZAIdvzobAw6eG_KiM4MyBSdWUgTHVjaWVuIEZhdXJlLCAzMzAwMCBCb3JkZWF1eBgBIAEiJgokCQilxB9bSkhAEab6wEotSkhAGcLiKi-BbQJAIZRn5O2OYwJAQgIIASIaChZteEdDMUtfQlZWZ09IdGJVSkZEVGZnEAI6AwoBMEICCABKDQj___________8BEAA" target="_blank" style="text-decoration: none; color: inherit;">
                        83 Rue Lucien Faure, 33000 Bordeaux
                    </a>
                </p>
            </div>
        </div>

        <div style="background: #002b5c; color: white; padding: 25px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 43, 92, 0.3);">
            <h4 style="margin: 0 0 15px 0;">Venir au campus</h4>
            <p style="font-size: 0.85rem; margin-bottom: 10px;">🚇 Métro : Ligne 7, future Ligne 15 </p>
            <p style="font-size: 0.85rem;">🚌 Bus : 131, 185</p>
        </div>

        <div style="background: #d32f2f; color: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(211, 47, 47, 0.4); flex-grow: 1;">
            <h4 style="margin: 0 0 20px 0; font-size: 1.3rem;">Horaires d'accueil</h4>
            <div style="font-size: 1rem; line-height: 1.8;">
                <p style="margin: 8px 0; border-bottom: 1px solid rgba(255,255,255,0.2); padding-bottom: 5px;">Lundi - Vendredi : 8h00 - 19h00</p>
                <p style="margin: 8px 0; border-bottom: 1px solid rgba(255,255,255,0.2); padding-bottom: 5px;">Samedi : 9h00 - 13h00</p>
                <p style="margin: 8px 0;">Dimanche : Fermé</p>
            </div>
        </div>
    </aside>
</main>

<?php include('includes/footer.php'); ?>