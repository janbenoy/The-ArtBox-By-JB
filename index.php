<?php
    require ('header.php');
    include ('connexion.php');

    $oeuvres = $con->query("SELECT * FROM oeuvre")

?>
<div id="liste-oeuvres">
    <?php foreach($oeuvres as $oeuvre): ?>
        <article class="oeuvre">
            <a href="oeuvre.php?id=<?= $oeuvre['id'] ?>">
                <img src="<?= $oeuvre['lien_photo'] ?>" alt="<?= $oeuvre['nom_de_l_oeuvre'] ?>">
                <h2><?= $oeuvre['nom_de_l_oeuvre'] ?></h2>
                <p class="description_de_l_oeuvre"><?= $oeuvre['nom_de_l_artiste'] ?></p>
            </a>
        </article>
    <?php endforeach; ?>
</div>
<?php require 'footer.php'; ?>
