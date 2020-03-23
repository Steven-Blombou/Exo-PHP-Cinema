<?php
echo bonjour;
 $numero_salle = !empty ($_POST["numero_salle"]) ? $_POST["numero_salle"] :NULL ;
 $capacite_salle = !empty ($_POST["capacite_salle"]) ? $_POST["capacite_salle"] :NULL ;
 $valeur_cinema = !empty ($_POST["valeur_cinema"]) ? $_POST["valeur_cinema"] :NULL ;
 echo $valeur_cinema;

// Connection Bdd
 try {
     $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
     $bdd = new PDO('mysql:host=db5000303628.hosting-data.io;dbname=dbs296615', 'dbu526524', 'jXd)G9)8' );
     }
 catch(PDOException $e)
     {
     echo $sql . "<br>" . $e->getMessage();
     }
// Récupérer valeur
$recup_idcinema = $bdd->query("SELECT id_cinema FROM cinema WHERE nom_cinema = '".$valeur_cinema."'");
while ($donnée4 = $recup_idcinema->fetchObject())
{
echo "$donnée4->$id_cinema";
}
   // Envoyer données dans la BDD.
 //    $numero_salle=$_POST['numero_salle'];
//    $capacite_salle=$_POST['capacite_salle'];
//     $stmt = $bdd->prepare("INSERT INTO salle (numero_salle, capacite_salle, Id_cinema) VALUES ( :numero_salle, :capacite_salle, :Id_cinema)");
//     $stmt->execute(array(
//         ':numero_salle' => $numero_salle,
//         ':Id_cinema' => 5,
//         ':capacite_salle'=>$capacite_salle));

 ?>
