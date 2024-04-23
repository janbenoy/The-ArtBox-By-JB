<?php
require_once "connexion.php";

if(isset($_POST['submit']))
{
    $tableau = htmlspecialchars($_POST['nom_de_l_oeuvre']);
    $artiste = htmlspecialchars($_POST['nom_de_l_artiste']);
    $image = htmlspecialchars($_POST['lien_photo']);
    $description = htmlspecialchars($_POST['description_de_l_oeuvre']);   

    if(!empty($tableau) && !empty($artiste) && !empty($image) && !empty($description) 
    && filter_var($_POST['lien_photo'], FILTER_VALIDATE_URL))
    {
        if(strlen($description) < 3)
        {
            echo "La description doit comporter au moins 3 caractères";
        }
        else
        {
            // Utilisation d'une requête préparée
            $req = $con->prepare("INSERT INTO oeuvres(nom_de_l_oeuvre, nom_de_l_artiste, lien_photo, 
            description_de_l_oeuvre) VALUES (?,?,?,?)");            
            // Exécution de la requête avec des paramètres
            $req->execute(array($tableau, $artiste, $image, $description));

            if($req){ echo "Enregistrement effectué avec succès";}

            header('location:oeuvre.php?id=' . $con->lastInsertId());            
        }
    }    
} else {
    header('location:ajouter.php?erreur=true');
}
