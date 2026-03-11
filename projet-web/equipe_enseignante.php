<?php 
$pageTitle = "Équipe - Département Informatique EFREI";
include('includes/header.php'); 
$equipe = [
    [
        "nom" => "Léa Delacroix",
        "role" => "Responsable de formation",
        "img" => "lea_delacroix.jpeg",
        "diplomes" => ["Bachelor développeuse web et application", "Licence ingénieure numérique", "Mastère de manager Full stack"]
    ],
    [
        "nom" => "Onais Gizat",
        "role" => "Référente développement Backend",
        "img" => "Orelie_Roget.jpeg",
        "diplomes" => ["Bachelor 1 et 2 PEX"]
    ],
    [
        "nom" => "Céline Boitel",
        "role" => "Chargés de mission Career center",
        "img" => "Profile_Picture_céline_boitel.jpg",
        "diplomes" => ["Bachelor développeur web et application", "Mastère dev manager full stack"]
    ],
    [
        "nom" => "Frédéric Meunier",
        "role" => "Directeur général de l'EFREI",
        "img" => "fréderic_meunier.webp",
        "diplomes" => []
    ],
    [
        "nom" => "Max Agueh",
        "role" => "Responsable du pôle sécurité Réseaux, systèmes embarqués",
        "img" => "AGUEH-MAX.jpg",
        "diplomes" => ["Polytechnique de l'Université de Nantes (2003)", "Master en Gestion de l'IAE de Paris (2011)"]
    ],
    [
        "nom" => "Boussad Ait-Salem",
        "role" => "Responsable du pôle Sécurité, Réseaux et Systèmes Embarqués",
        "img" => "Boussad_AIT-SALEM.jpg",
        "diplomes" => ["Doctorat en 2011 (Université de Limoges)", "Postdoctorat à Orange Labs"]
    ],
    [
        "nom" => "Dario Vieira",
        "role" => "Professeur associé / Responsable de l'axe Réseaux de Communication",
        "img" => "Dario-VIEIRA.jpg",
        "diplomes" => ["Diplôme d'ingénieur (Brésil)", "M.S. (UNICAMP) au Brésil", "Doctorat Télécom & Management SudParis"]
    ],
    [
        "nom" => "Feriel Bouakkaz",
        "role" => "Enseignante-Chercheuse Sécurité, Résilience et Confiance numérique",
        "img" => "Feriel-Bouakkaz.jpg",
        "diplomes" => ["Master Recherche réseaux et sécurité (2012)", "Doctorat en 2016"]
    ],
    [
        "nom" => "Lamine Bougueroua",
        "role" => "Enseignant-Chercheur Données et Intelligence Artificielle",
        "img" => "Lamine-BOUGUEROUA.jpg",
        "diplomes" => ["Ingénieur en informatique (1998)", "Master Spécialisé (Versailles 2001)", "Doctorat (Paris-EST Creteil 2007)"]
    ],
    [
        "nom" => "Layth Sliman",
        "role" => "Professeur / Responsable de l'axe Sécurité, Résilience et Confiance Numérique",
        "img" => "Layth-Sliman.jpg",
        "diplomes" => ["Ingénieur (INSA Lyon)", "Doctorat (INSA Lyon / Université des Ryukyus)", "Habilitation à diriger des recherches (HDR)"]
    ],
    [
        "nom" => "Nadjib AIT SAADI",
        "role" => "Chercheur associé",
        "img" => "Nadjib.jpg",
        "diplomes" => ["Chercheur associé de l'Efrei Research Lab"]
    ],
    [
        "nom" => "Yessin Neggaz",
        "role" => "Responsable de la majeure Networks & Cloud Infrastructure",
        "img" => "Neggaz.jpg",
        "diplomes" => ["Doctorat en informatique (Université de Bordeaux 2016)"]
    ],
    [
        "nom" => "Souheib Yousfi",
        "role" => "Enseignant-chercheur Sécurité, Résilience et Confiance Numérique",
        "img" => "Souheib-Yousfi.jpg",
        "diplomes" => ["Diplômé ENIT Tunis (2011)", "Doctorat (Laboratoire LIP2)"]
    ],
    [
        "nom" => "Yulliwas Ameur",
        "role" => "Enseignant-chercheur Sécurité, Résilience et Confiance Numérique",
        "img" => "Yulliwas-Ameur.jpg",
        "diplomes" => ["Doctorat au CNAM", "Ancien ATER à l'Université Paris Panthéon-Assas"]
    ]
];
?>

<main>
    <section class="content-block">
        <h2>Notre Équipe Pédagogique</h2>
        <div class="equipe-grid">
            <?php foreach ($equipe as $prof): ?>
                <div class="prof-card">
                    <div class="prof-card-header">
                        <div class="photo-wrapper">
                            <img src="img/<?php echo htmlspecialchars($prof['img']); ?>" alt="Photo de <?php echo htmlspecialchars($prof['nom']); ?>">
                        </div>
                    </div>
                    <div class="prof-card-body">
                        <h3><?php echo htmlspecialchars($prof['nom']); ?></h3>
                        <p class="role"><?php echo htmlspecialchars($prof['role']); ?></p>
                        <?php if (!empty($prof['diplomes'])): ?>
                            <ul class="prof-diplomes">
                                <?php foreach ($prof['diplomes'] as $diplome): ?>
                                    <li><?php echo htmlspecialchars($diplome); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php include('includes/footer.php'); ?>