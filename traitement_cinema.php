<?php

 $nom_cinema = !empty ($_POST["nom_cinema"]) ? $_POST["nom_cinema"] :NULL ;
 $ville_cinema = !empty ($_POST["ville_cinema"]) ? $_POST["ville_cinema"] :NULL ;
 $adresse_cinema = !empty ($_POST["adresse_cinema"]) ? $_POST["adresse_cinema"] :NULL ;
 $mail_cinema = !empty ($_POST["mail_cinema"]) ? $_POST["mail_cinema"] :NULL ;
 $telephone_cinema = !empty ($_POST["telephone_cinema"]) ? $_POST["telephone_cinema"] :NULL ;

// Connection Bdd
 try {
     $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
     $bdd = new PDO('mysql:host=db5000303628.hosting-data.io;dbname=dbs296615', 'dbu526524', 'jXd)G9)8' );
     }
 catch(PDOException $e)
     {
     echo $sql . "<br>" . $e->getMessage();
     }

     // Envoyer données dans la BDD.
 $stmt = $bdd->prepare("INSERT INTO cinema (nom_cinema, ville_cinema, adresse_cinema, mail_cinema, telephone_cinema) VALUES (:nom_cinema, :ville_cinema, :adresse_cinema, :mail_cinema, :telephone_cinema)");
 $stmt->bindParam(':nom_cinema', $nom_cinema);
 $stmt->bindParam(':ville_cinema', $ville_cinema);
 $stmt->bindParam(':adresse_cinema', $adresse_cinema);
 $stmt->bindParam(':mail_cinema', $mail_cinema);
 $stmt->bindParam(':telephone_cinema', $telephone_cinema);
 $stmt->execute();
 ?>
