<?php require 'header.php'; 
        require 'connexion.php';        
?>

<form action="traitement.php" method="POST">
    <div class="champ-formulaire">
        <label for="titre">Titre de l'œuvre</label>
        <input type="text" name="nom_de_l_oeuvre" id="titre" required>
    </div>
    <div class="champ-formulaire">
        <label for="artiste">Auteur de l'œuvre</label>
        <input type="text" name="nom_de_l_artiste" id="artiste" required>
    </div>
    <div class="champ-formulaire">
        <label for="image">URL de l'image</label>
        <input type="url" name="lien_photo" id="image">
    </div>
    <div class="champ-formulaire">
        <label for="description">Description</label>
        <textarea name="description_de_l_oeuvre" id="description" minlength="3"></textarea>
    </div>

    <input type="submit" value="Valider" name="submit">
</form>

<?php require 'footer.php'; ?>




