<?php


// on se connecte à notre base
$server = "db5000303628.hosting-data.io";
$dbname = "dbs296615";
$user = "dbu526524";
$pass = "jXd)G9)8";
$numero_salle =$_POST["numero_salle"];
$capacite_salle =$_POST["capacite_salle"];

 echo "$nom_cinema /$ville_cinema /$adresse_cinema /$mail_cinema/ $telephone_cinema  <br>";


try{
   $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
   $bdd = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass,$pdo_options);

          echo "Cinema/Ville/Adresse/numero telephone<br>";



          $numero_salle =$_POST["numero_salle"];
          $capacite_salle =$_POST["capacite_salle"];

          // On recupere tout le contenu de la table news
        $cinema = $bdd->query("SELECT * FROM cinema");
// On affiche le resultat
       while ($donnée = $cinema->fetchObject()){
           //On affiche les données dans le tableau
           echo "      $donnée->nom_cinema/";
           echo "      $donnée->ville_cinema/";
           echo "      $donnée->adresse_cinema/";
           echo "      $donnée->mail_cinema/";
           echo "      $donnée->telephone_cinema<br>";
       }



        $cinema->closeCursor();



        $cinema = $bdd->query("SELECT * FROM cinema");
       while ($i = $cinema->fetchObject()){
           echo "<br><h1>$i->nom_cinema</h1><br>";
           $salle= $bdd->query('SELECT * FROM salle WHERE id_cinema='.$i->id_cinema);
           while($j = $salle->fetchObject()){
               echo "salle  $j->numero_salle : ";
               echo " $j->capacite_salle places<br>";
           }
       }
       $cinema->closeCursor();

       $equipement=$bdd->query("SELECT id_equipement FROM avoir ");
       $salle=$bdd->query("SELECT id_salle FROM avoir");
       while(($y = $equipement->fetchObject()) && ($z= $salle->fetchObject())) {
          //echo "<br> equipement : $y->id_equipement<br>";
           //echo "<br>salle : $z->id_salle<br>";
           $numero=$bdd->query("SELECT numero_salle FROM salle WHERE id_salle=".$z->id_salle);
           $nomequip=$bdd->query("SELECT nom_equipement FROM equipement WHERE id_equipement=".$y->id_equipement);
           $idcine=$bdd->query("SELECT id_cinema FROM salle WHERE id_salle=".$z->id_salle);
           while(($k=$numero->fetchObject()) && ($l=$nomequip->fetchObject())  && ($p=$idcine->fetchObject())){

               $nomcine=$bdd->query("SELECT nom_cinema FROM cinema where id_cinema=".$p->id_cinema);
               while($q=$nomcine->fetchObject()){
                   echo "<br>dans la salle numero $k->numero_salle du cinema $q->nom_cinema il y a l'equipement $l->nom_equipement <br>";
               }
           }
       }



    }
   catch(Exception $e){
       die('Erreur : '.$e->getMessage());
   }
 ?>
