let secretCount = 0;
let lastClickTime = 0;
let currentSlide = 0;
let currentIndex = 0;

function moveSlide(step) {
    const slides = document.querySelectorAll('.slide');
    if (slides.length === 0) return;
    slides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + step + slides.length) % slides.length;
    slides[currentSlide].classList.add('active');
}
window.moveSlide = moveSlide;

function openNav() {
    const now = Date.now();
    if (now - lastClickTime > 2000) secretCount = 0;
    secretCount++;
    lastClickTime = now;

    if (secretCount === 5) {
        const path = window.location.pathname.split("/").pop();
        if (path === "acceuil.php" || path === "") window.location.href = "page_secrete_acceuil.php";
        else window.location.href = "page_secrete_contact.php";
        return;
    }
    document.getElementById("mySidebar").style.width = "300px";
    document.getElementById("overlay").style.display = "block";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("overlay").style.display = "none";
}
window.openNav = openNav;
window.closeNav = closeNav;


function openModal(id) {
    if (typeof formationsData === 'undefined' || formationsData === null) return;

    // trim() au cas où l'id contient des espaces parasites
    const idClean = id.trim();

    let formation = null;
    if (formationsData.prepas) formation = formationsData.prepas.find(f => f.id === idClean);
    if (!formation && formationsData.bachelors) formation = formationsData.bachelors.find(f => f.id === idClean);
    if (!formation && formationsData.ingenieur) formation = formationsData.ingenieur.find(f => f.id === idClean);

    if (formation) {
        const modalBody = document.getElementById('modalBody');
        // On récupère le thème actuel pour adapter les couleurs
        const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
        const titleColor = isDark ? '#ffffff' : '#970d0d';
        const niveauColor = isDark ? '#cccccc' : '#555555';
        const textColor = isDark ? '#ffffff' : '#333333';
        const hrColor = isDark ? '#555' : '#dddddd';

        modalBody.innerHTML = `
            <h2 style="color:${titleColor}; text-align:center;">${formation.titre}</h2>
            <p style="text-align:center; color:${niveauColor};"><strong>${formation.niveau}</strong></p>
            <hr style="border:0; border-top:1px solid ${hrColor}; margin:15px 0;">
            <div style="color:${textColor}; text-align:left; line-height:1.5;">
                <p><strong>Objectifs :</strong> ${formation.objectifs}</p>
                <p><strong>Programme :</strong> ${formation.details}</p>
                <p><strong>Débouchés :</strong> ${formation.debouches}</p>
            </div>`;
        document.getElementById('formationModal').style.display = "flex";
    }
}

function closeModal() {
    document.getElementById('formationModal').style.display = "none";
}
window.openModal = openModal;
window.closeModal = closeModal;

const timelineSteps = [
    { year: "1936", title: "Création de l'EFR", text: "L'école EFR est créée à Paris par Ernest Lavigne.", img: "img/efrei_1936.png" },
    { year: "1987", title: "Campus de Villejuif", text: "Inauguration du nouveau campus.", img: "img/efrei_1987.jpg" },
    { year: "2021", title: "Campus Cyber", text: "L'école rejoint le Campus Cyber.", img: "img/efrei_2021.png" }
];

function changeTimeline(direction) {
    const dataContainer = document.getElementById('timeline-data');
    const imgElement = document.getElementById('display-img');
    if (dataContainer) dataContainer.style.opacity = 0;

    setTimeout(() => {
        currentIndex = (currentIndex + direction + timelineSteps.length) % timelineSteps.length;
        const step = timelineSteps[currentIndex];
        document.getElementById('display-year').innerText = step.year;
        document.getElementById('display-title').innerText = step.title;
        document.getElementById('display-text').innerText = step.text;
        if (imgElement && step.img) imgElement.src = step.img;
        if (dataContainer) dataContainer.style.opacity = 1;
    }, 400);
}
window.changeTimeline = changeTimeline;

document.addEventListener('DOMContentLoaded', () => {
    const themeBtn = document.getElementById('theme-toggle');
    const htmlElement = document.documentElement;
    const savedTheme = localStorage.getItem('theme') || 'light';
    htmlElement.setAttribute('data-theme', savedTheme);
    if (themeBtn) {
        themeBtn.innerText = savedTheme === 'dark' ? '🌕' : '🌑';
        themeBtn.addEventListener('click', () => {
            let newTheme = htmlElement.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
            htmlElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            themeBtn.innerText = newTheme === 'dark' ? '🌕' : '🌑';
        });
    }

    setInterval(() => moveSlide(1), 5000);

    const menuBtn = document.getElementById("openMenu");
    if (menuBtn) menuBtn.onclick = openNav;
});

window.onclick = (e) => {
    if (e.target == document.getElementById('formationModal')) closeModal();
};