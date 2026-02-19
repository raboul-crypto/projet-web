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
    let titre = "";
    let diplome = "";
    let texte = "";

    if(type === 'prepa sci') {
        titre = "Prépa Scientifique";
        diplome = "Post-Bac";
        texte = "Ce cycle en deux ans prépare nos étudiants en combinant formation scientifique et technique avec une formation générale et professionnelle de l'ingénieur.";
    } 
    else if(type === 'prepa bio') {
        titre = "Prépa Bio et Numérique";
        diplome = "Post-Bac";
        texte = "Cette prépa s'adresse aux étudiants intéressés par la biologie, la santé et les sciences du numérique.";
    }
    else if(type === 'prepa plus') {
        titre = "Prépa PLUS";
        diplome = "Post-Bac";
        texte = "La Prépa PLUS est une passerelle vers le cycle ingénieur de l’Efrei grâce à un parcours renforcé en mathématiques et physique.";
    }
    else if(type === 'bachelor web') {
        titre = "Bachelor Web & IA";
        diplome = "Post-Bac+3";
        texte = "Les étudiants apprennent à programmer et à développer des applications et maîtrisent les outils d’IA.";
    }
    else if(type === 'bachelor cyber') {
        titre = "Bachelor Cybersécurité & Réseau";
        diplome = "Post-Bac+3";
        texte = "Cette formation prépare les étudiants à concevoir et déployer des stratégies de sécurité des systèmes d’information.";
    }
    else if(type === 'bachelor info') {
        titre = "Bachelor Informatique";
        diplome = "Post-Bac+3";
        texte = "Forme des développeurs polyvalents capables d'opérer en Fullstack, DevOps, Back End ou Front End.";
    }
    else if(type === 'bachelor eth') {
        titre = "Ethical Hacking";
        diplome = "Post-Bac+3";
        texte = "Maîtrise des compétences clés de la cybersécurité avec une approche orientée vers l’entreprise et les tests d'intrusion.";
    }
    else if(type === 'ingenieur') {
        titre = "Diplôme d'Ingénieur";
        diplome = "Bac+5";
        texte = "Cette année de tronc commun se compose d’un semestre à l’international et d’un semestre de cours à Paris.";
    }

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

    document.getElementById('formationModal').style.display = "flex";
}
function closeModal() {
    document.getElementById('formationModal').style.display = "none";
}

window.onclick = function(event) {
    let modal = document.getElementById('formationModal');
    if (event.target == modal) { closeModal(); }
}