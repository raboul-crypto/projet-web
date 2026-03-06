<?php 
  $pageTitle = "Formations - Efrei";
  include('includes/header.php'); 
?>

<main>
    <section class="content-block">
        <h2>Nos Cursus</h2>
        <p>Cliquez sur une formation pour voir les détails.</p>
        
        <h3>Cycle Prépa</h3>
        <div class="formation-grid">
            <div class="card" onclick="openModal('prepa sci')">
                <li>Prépa scientifique <span class="plus-info">+ d'infos</span></li>
            </div>
            <div class="card" onclick="openModal('prepa bio')">
                <li>Prépa Bio et Numerique <span class="plus-info">+ d'infos</span></li>
            </div>
            <div class="card" onclick="openModal('prepa plus')">
                <li>Prépa PLUS <span class="plus-info">+ d'infos</span></li>
            </div>
        </div>

        <h3>Cycle Bachelor</h3>
        <div class="formation-grid">
            <div class="card" onclick="openModal('bachelor web')">
                <li>Bachelor Web & IA <span class="plus-info">+ d'infos</span></li>
            </div>
            <div class="card" onclick="openModal('bachelor cyber')">
                <li>Bachelor Cybersecurité & Réseau <span class="plus-info">+ d'infos</span></li>
            </div>
            <div class="card" onclick="openModal('bachelor info')">
                <li>Bachelor informatique <span class="plus-info">+ d'infos</span></li>
            </div>
            <div class="card" onclick="openModal('bachelor eth')">
                <li>Bachelor cybersécurité & ethical hacking <span class="plus-info">+ d'infos</span></li>
            </div>
        </div>

        <h3>Cycle Ingénieur</h3>
        <div class="formation-grid">
            <div class="card" onclick="openModal('ingenieur')">
                <li><span class="plus-info">Ingénieur</span></li>
            </div>
        </div>
    </section>
</main>

<div id="formationModal" class="modal">
    <div class="modal-content">
        <span class="close-modal" onclick="closeModal()">Fermer</span>
        <div id="modalBody"></div>
    </div>
</div>

<?php include('includes/footer.php'); ?>