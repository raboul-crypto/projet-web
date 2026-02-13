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