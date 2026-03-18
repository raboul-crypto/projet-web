let secretCount = 0;
let lastClickTime = 0;
let currentSlide = 0;
let currentIndex = 0;

function moveSlide(step) {
    let slides = document.querySelectorAll('.slide');
    slides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + step + slides.length) % slides.length;
    slides[currentSlide].classList.add('active');
}

function openNav() {
    let now = Date.now();
    if (now - lastClickTime > 2000) secretCount = 0;
    secretCount++;
    lastClickTime = now;

    if (secretCount === 5) {
        let path = window.location.pathname.split("/").pop();
        if (path === "acceuil.php" || path === "") {
            window.location.href = "html/page_secrete_acceuil.html";
        } else {
            window.location.href = "html/page_secrete_contact.html";
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

function openModal(id) {
    let formation = null;
    formation = formationsData.prepas.find(f => f.id === id);
    if (!formation) formation = formationsData.bachelors.find(f => f.id === id);
    if (!formation) formation = formationsData.ingenieur.find(f => f.id === id);

    if (formation) {
        document.getElementById('modalBody').innerHTML =
            '<h2>' + formation.titre + '</h2>' +
            '<p><strong>' + formation.niveau + '</strong></p><hr>' +
            '<p><strong>Objectifs :</strong> ' + formation.objectifs + '</p>' +
            '<p><strong>Programme :</strong> ' + formation.details + '</p>' +
            '<p><strong>Débouchés :</strong> ' + formation.debouches + '</p>';
        document.getElementById('formationModal').style.display = "flex";
    }
}

function closeModal() {
    document.getElementById('formationModal').style.display = "none";
}

let timelineSteps = [
    { year: "1936", title: "Création de l'EFR", text: "L'école EFR est créée à Paris par Ernest Lavigne." },
    { year: "1987", title: "Campus de Villejuif", text: "Inauguration du nouveau campus." },
    { year: "2021", title: "Campus Cyber", text: "L'école rejoint le Campus Cyber." }
];

function changeTimeline(direction) {
    currentIndex = (currentIndex + direction + timelineSteps.length) % timelineSteps.length;
    let step = timelineSteps[currentIndex];
    document.getElementById('display-year').innerText = step.year;
    document.getElementById('display-title').innerText = step.title;
    document.getElementById('display-text').innerText = step.text;
}

document.addEventListener('DOMContentLoaded', function() {
    let savedTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-theme', savedTheme);
    document.getElementById('theme-toggle').innerText = savedTheme === 'dark' ? '🌕' : '🌑';

    document.getElementById('theme-toggle').addEventListener('click', function() {
        let theme = document.documentElement.getAttribute('data-theme');
        let newTheme = theme === 'dark' ? 'light' : 'dark';
        document.documentElement.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        document.getElementById('theme-toggle').innerText = newTheme === 'dark' ? '🌕' : '🌑';
    });

    setInterval(function() { moveSlide(1); }, 5000);

    let form = document.querySelector('form[action="contact.php"]');
    if (form) {
        form.addEventListener('submit', function(e) {
            let nom = form.querySelector('[name="nom"]').value.trim();
            let email = form.querySelector('[name="email"]').value.trim();
            let message = form.querySelector('[name="message"]').value.trim();

            if (nom == '' || email == '' || message == '') {
                alert("Veuillez remplir tous les champs.");
                e.preventDefault();
            } else if (!email.includes('@') || !email.includes('.')) {
                alert("L'adresse email n'est pas valide.");
                e.preventDefault();
            } else if (message.length < 10) {
                alert("Votre message est trop court.");
                e.preventDefault();
            }
        });
    }
});

window.onclick = function(e) {
    if (e.target == document.getElementById('formationModal')) {
        closeModal();
    }
};