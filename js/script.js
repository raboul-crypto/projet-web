// On initialise l'index
let currentSlide = 0;

// Fonction principale de mouvement
function moveSlide(step) {
    const slides = document.querySelectorAll('.slide');
    
    // Sécurité : on vérifie qu'il y a bien des images
    if (slides.length === 0) return;

    // On retire la classe active de l'image actuelle
    slides[currentSlide].classList.remove('active');

    // On calcule l'index suivant
    currentSlide = (currentSlide + step + slides.length) % slides.length;

    // On ajoute la classe active à la nouvelle image
    slides[currentSlide].classList.add('active');
}

// On attache la fonction à l'objet window pour que le onclick du HTML la voie
window.moveSlide = moveSlide;

document.addEventListener('DOMContentLoaded', () => {
    // 1. Défilement automatique toutes les 5 secondes
    let autoPlay = setInterval(() => {
        moveSlide(1);
    }, 5000);

    // 2. Gestion de l'arrêt au clic sur les flèches
    const buttons = document.querySelectorAll('.prev, .next');
    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            console.log("Clic détecté : arrêt du défilement auto.");
            clearInterval(autoPlay);
        });
    });
});
function openNav() {
    document.getElementById("mySidebar").style.width = "300px"; // Ouvre à 300px
    document.getElementById("overlay").style.display = "block"; // Affiche le voile
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0"; // Referme
    document.getElementById("overlay").style.display = "none"; // Cache le voile
}

document.getElementById("openMenu").onclick = openNav;


function openModal(type) {
    let texte = "";
    if(type === 'prepa sci') texte = "Ce cycle en deux ans prépare nos étudiants en combinant formation scientifique et technique avec une formation générale et professionnelle de l'ingénieur";
    if(type === 'prepa bio') texte = "Cette prépa s'adresse aux étudiants intéressés par la biologie, lasanté et les sciences du numérique.";
    if(type === 'prepa plus') texte = "La Prépa PLUS est une passerelle vers le cycle ingénieur de l’Efrei. Grâce à un parcours renforcé en mathématiques et physique, vous intégrez l’école avec toutes les clés pour réussir votre formation d’ingénieur.";
    if(type === 'bachelor web') texte = "Les étudiants du Bachelor Développeur web & IA apprennent à programmer et à développer des applications (back-end, front-end) et maîtrisent les outils d’IA.";
    if(type === 'bachelor cyber') texte = "Cette formation prépare les étudiants à concevoir et déployer des stratégies de sécurité des systèmes d’information qui préviennent efficacement les menaces cyber et y répondent de manière adaptée.";
    if(type === 'bachelor info') texte = "Le Bachelor Informatique de l’Efrei forme des développeurs polyvalents capable d’opérer aussi bien en tant que Fullstack, DevOps, Back End ou Front End. Ses diplômés peuvent travailler aussi bien au sein d’une association que d’une grande ESN";
    if(type === 'bachelor eth') texte = "Nos diplômés maîtrisent les compétences clés de la cybersécurité dans une approche orientée vers l’entreprise. Formés aux tests d’intrusion avec une forte dimension éthique, ils développent également une expertise en sécurité logicielle.";
    if(type === 'ingenieur') texte = "Cette année de tronc commun se compose d’un semestre à l’international dans le cadre de la mobilité étudiante et d’un semestre de cours à Paris. À son issue, les élèves peuvent choisir une des 13 majeures proposées au sein des 4 filières de l’école en vue de se spécialiser dans un domaine précis du numérique.";

    document.getElementById('modalBody').innerHTML = `
        <div class="modal-header-center">
            <h2 class="modal-titre">${titre}</h2>
            <p class="modal-diplome">${diplome}</p>
        </div>
        <hr class="modal-separator">
        <div class="modal-text">
            <p>${texte}</p>
        </div>
    `;
    document.getElementById('formationModal').style.display = "block";
}

function closeModal() {
    document.getElementById('formationModal').style.display = "none";
}

window.onclick = function(event) {
    let modal = document.getElementById('formationModal');
    if (event.target == modal) { closeModal(); }
}