let secretCount = 0;
let lastClickTime = 0;

let currentSlide = 0;

function moveSlide(step) {
    const slides = document.querySelectorAll('.slide');
    if (slides.length === 0) return;

    slides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + step + slides.length) % slides.length;
    slides[currentSlide].classList.add('active');
}

window.moveSlide = moveSlide;

document.addEventListener('DOMContentLoaded', () => {
    let autoPlay = setInterval(() => {
        moveSlide(1);
    }, 5000);

    const buttons = document.querySelectorAll('.prev, .next');
    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            console.log("Clic détecté : arrêt du défilement auto.");
            clearInterval(autoPlay);
        });
    });
});

function openNav() {
    const now = Date.now();
    
    if (now - lastClickTime > 2000) {
        secretCount = 0;
    }
    
    secretCount++;
    lastClickTime = now;

    if (secretCount === 5) {
        secretCount = 0;
        

        // On récupère le nom de la page actuelle
        const path = window.location.pathname;
        const currentPage = path.split("/").pop();

        if (currentPage === "acceuil.html" || currentPage === "") {
            window.location.href = "page_secrete_acceuil.html";
        } 
        else if (currentPage === "cours_et_formation.html") {
            window.location.href = "secret_formation.html"; // La nouvelle page !
        }
        else if (currentPage === "equipe_enseignante.html") {
            window.location.href = "secret_equipe.html"; // La nouvelle page !
        }
        else {
            window.location.href = "page_secrete_contact.html"; // Celle de contact
        }
        return; 
    }

    document.getElementById("mySidebar").style.width = "300px";
    document.getElementById("overlay").style.display = "block";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("overlay").style.display = "none";
}

document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById("openMenu");
    if (menuBtn) {
        menuBtn.onclick = openNav;
    }
});

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

    const modalBody = document.getElementById('modalBody');
    if (modalBody) {
        modalBody.innerHTML = `
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
}

function closeModal() {
    const modal = document.getElementById('formationModal');
    if (modal) modal.style.display = "none";
}

window.onclick = function(event) {
    let modal = document.getElementById('formationModal');
    if (event.target == modal) { closeModal(); }
}