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


const themeBtn = document.getElementById('theme-toggle'); // Vérifie que ton bouton a bien cet ID
const htmlElement = document.documentElement;
const savedTheme = localStorage.getItem('theme');

if (savedTheme) {
    htmlElement.setAttribute('data-theme', savedTheme);
    themeBtn.innerText = savedTheme === 'dark' ? '☀️' : '🌙';
}

themeBtn.addEventListener('click', () => {
    let currentTheme = htmlElement.getAttribute('data-theme');
    let newTheme = currentTheme === 'dark' ? 'light' : 'dark';

    htmlElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);

    themeBtn.innerText = newTheme === 'dark' ? '☀️' : '🌙';
});

const timelineSteps = [
    { year: "1936", title: "Création de l'EFR", text: "L'école EFR est créée à Paris par Ernest Lavigne pour répondre aux besoins en radioélectricité.", img: "../img/efrei_1936.png" },
    { year: "1945", title: "L'EFR est reconnue par l'État", text: "L'école franchit une étape majeure en obtenant la reconnaissance officielle de l'État." },
    { year: "1957", title: "Certification CTI", text: "L'EFR est habilitée à délivrer le titre d'ingénieur et crée sa classe préparatoire intégrée.", img: "../img/efrei_1957.png" },
    { year: "1970", title: "L'EFR devient EFREI", text: "L'école intègre l'électronique et affirme son positionnement dans les nouvelles technologies." },
    { year: "1973", title: "Informatique & Automatique", text: "L'Efrei s'adapte à la révolution numérique en intégrant l'informatique.", img: "../img/efrei_1973.png" },
    { year: "1985", title: "Création de la SEPEFREI", text: "Lancement de la Junior-Entreprise pour favoriser l'expérience professionnelle.", img: "../img/efrei_1985.png" },
    { year: "1987", title: "Campus de Villejuif", text: "Inauguration du nouveau campus pour répondre à la croissance des effectifs.", img: "../img/efrei_1987.jpg" },
    { year: "2010", title: "Incubateur Efrei Entrepreneurs", text: "Un lieu dédié aux projets innovants des étudiants et des startups.", img: "../img/efrei_2010.png" },
    { year: "2012", title: "Efrei Research Lab", text: "La recherche devient un pilier de l'école pour nourrir les formations.", img: "../img/efrei_2012.png" },
    { year: "2015", title: "Label EESPIG", text: "Reconnaissance d'Établissement d'Enseignement Supérieur Privé d'Intérêt Général.", img: "../img/efrei_2015.png" },
    { year: "2018", title: "Student Hub", text: "Inauguration d'un espace de 600m² dédié à la vie étudiante et associative.", img: "../img/efrei_2018.png" },
    { year: "2020", title: "Campus de Bordeaux", text: "Ouverture d'un second campus pour étendre l'offre de formation.", img: "../img/efrei_2020.png" },
    { year: "2021", title: "Ouverture du site Gorki à Villejuif", text: "Un nouveau site pour renforcer la présence de l'école au cœur de Villejuif." },
    { year: "2021", title: "L'Efrei intègre le Campus Cyber", text: "L'école rejoint le Campus Cyber pour renforcer son expertise en cybersécurité.", img:"../img/efrei_2021.png" }
];

let currentIndex = 0;

function changeTimeline(direction) {
    const dataContainer = document.getElementById('timeline-data');
    const imgElement = document.getElementById('display-img');
    const imgContainer = document.querySelector('.history-image-container');

    // Effet de disparition (début de l'animation)
    dataContainer.style.opacity = 0;
    imgElement.style.opacity = 0;

    setTimeout(() => {
        currentIndex += direction;
        if (currentIndex >= timelineSteps.length) currentIndex = 0;
        if (currentIndex < 0) currentIndex = timelineSteps.length - 1;

        const step = timelineSteps[currentIndex];
        
        // Mise à jour des textes
        document.getElementById('display-year').innerText = step.year;
        document.getElementById('display-title').innerText = step.title;
        document.getElementById('display-text').innerText = step.text;

        // --- GESTION DE L'IMAGE ---
        if (step.img && step.img.trim() !== "") {
            imgElement.src = step.img;
            imgContainer.style.display = "block"; // On montre le bloc image
            imgElement.style.opacity = 1;         // On lance le fondu
        } else {
            imgElement.src = ""; 
            imgContainer.style.display = "none";  // On cache complètement le bloc
        }

        // Effet de réapparition du texte
        dataContainer.style.opacity = 1;
    }, 400); 
}