<?php
$pageTitle = "Formations - Efrei";
include('includes/header.php');
require_once('includes/functions.php');
$allData = getFormations();
?>

<main>
    <section class="content-block">
        <h2>Nos Cursus Informatiques</h2>
        <p>Découvrez nos programmes du post-bac au grade de Master.</p>

        <?php foreach (['prepas' => 'Cycle Prépa', 'bachelors' => 'Cycle Bachelor', 'ingenieur' => 'Cycle Ingénieur'] as $key => $label): ?>
            <h3><?php echo $label; ?></h3>
            <div class="formation-grid">
                <?php foreach ($allData[$key] as $f): ?>
                    <div class="card" onclick="openModal('<?php echo htmlspecialchars($f['id'], ENT_QUOTES); ?>')">
                        <span><?php echo $f['titre']; ?> <span class="plus-info">+ d'infos</span></span>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </section>
</main>

<div id="formationModal" class="modal">
    <div class="modal-content">
        <span class="close-modal" onclick="closeModal()">&times; Fermer</span>
        <div id="modalBody"></div>
    </div>
</div>
<?php include('includes/footer.php'); ?>