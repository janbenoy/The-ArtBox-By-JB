<?php

TRY{
        $con=new PDO("mysql:host=localhost;dbname=the_artbox", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
    catch(PDOException $exc)

    {
        echo "Echec de connexion" . $exc->getMessage();
    }

   
   
?>