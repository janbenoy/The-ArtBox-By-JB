<?php require 'header.php';
     
    include ('connexion.php');

    // Si l'URL ne contient pas d'id, on redirige sur la page d'accueil
    if(empty($_GET['id'])) {
        header('Location: index.php');
    }

    $_REQUEST = $con->prepare('SELECT * FROM oeuvres WHERE id = ?');
    $_REQUEST->execute([$_GET['id']]);
    $oeuvre = $_REQUEST->fetch();

    // Si aucune oeuvre trouvé, on redirige vers la page d'accueil
    if(is_null($oeuvre)) {
        header('Location: index.php');
    }
?>

<article id="detail-oeuvre">
    <div id="img-oeuvre">
        <img src="<?= $oeuvre['lien_photo'] ?>" alt="<?= $oeuvre['nom_de_l_oeuvre'] ?>">
    </div>
    <div id="contenu-oeuvre">
        <h1><?= $oeuvre['nom_de_l_oeuvre'] ?></h1>
        <p class="description"><?= $oeuvre['nom_de_l_artiste'] ?></p>
        <p class="description-complete">
             <?= $oeuvre['description_de_l_oeuvre'] ?>
        </p>
    </div>
</article>

<?php require 'footer.php'; ?>
