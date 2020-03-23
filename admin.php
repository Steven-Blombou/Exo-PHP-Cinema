<?php
     // on se connecte à notre base
     $server = "db5000303628.hosting-data.io";
     $dbname = "dbs296615";
     $user = "dbu526524";
     $pass = "jXd)G9)8";

     try{
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass,$pdo_options);


        // On recupere tout le contenu de la table news
        $reponse = $bdd->query('SELECT nom_cinema,ville_cinema,adresse_cinema,mail_cinema,telephone_cinema FROM cinema');

// On affiche le resultat
        while ($donnees = $reponse->fetch()){
            //On affiche les données dans le tableau
            echo "</tr>";
            echo "<td> $donnees[nom_cinema] </td>";
            echo "<td> $donnees[ville_cinema] </td>";
            echo "<td> $donnees[adresse_cinema] </td>";
            echo "<td> $donnees[mail_cinema] </td>";
            echo "<td> $donnees[telephone_cinema] </td>";
            echo "</tr>";
        }
        $reponse->closeCursor();
        }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }

?>
