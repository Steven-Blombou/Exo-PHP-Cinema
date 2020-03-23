<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exo Php</title>
</head>
<body>

  <div class="row">
    		<div class="col-12">
          <div class="logo">
            <a href="index.html"><img src=images/left-arrow.png alt=""/></a>
          </div>
    			<h1 class="titre">Formulaire d'ajout</h1>
    		</div>
    	</div>
      <form action="traitement_cinema.php" method="post">
        <div class="name">
         <div class="row">
           <div class="col-6">
            <input type="text" class="form-control" placeholder="Nom Cinema" name="nom_cinema">
           </div>
           <div class="col-6">
            <input type="text" class="form-control" placeholder="Ville Cinema" name="ville_cinema">
           </div>
         </div>
         <div class="col-6">
          <input type="text" class="form-control" placeholder="Adresse Cinema" name="adresse_cinema">
         </div>
         </div>
         <div class="row">
         	 <div class="col-12">
         	 	<div class="email">
         	 	<input type="email" class="form-control" id="mail" placeholder="Email Cinema" name="mail_cinema">
         	 	</div>
            <div class="col-6">
             <input type="text" class="form-control" placeholder="Telephone Cinema" name="telephone_cinema">
            </div>
         	 </div>
         	</div>
          <div class="rows">
            <div class="col-12">
              <div class="bouton">
                <button type="submit" class="btn btn-primary mb-2">Envoyé</button>
              </div>
            </div>
          </div>
      </form>


      <form action="traitement_salle.php" method="post">
        <div class="name">
         <div class="row">
           <div class="col-6">
             <div class="col-6">
               <select name="valeur_cinema">
                 <?php
// on se connecte à notre base
$server = "db5000303628.hosting-data.io";
$dbname = "dbs296615";
$user = "dbu526524";
$pass = "jXd)G9)8";
$numero_salle =$_POST["numero_salle"];
$capacite_salle =$_POST["capacite_salle"];


try{
   $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
   $bdd = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass,$pdo_options);

          // On recupere tout la liste des noms des cinema dans la table cinema
        $cinema = $bdd->query("SELECT nom_cinema FROM cinema");
// On affiche le resultat
       while ($donnée = $cinema->fetchObject()){
 ?>

       <option value="<?php echo "$donnée->nom_cinema";?>"><?php echo "$donnée->nom_cinema";?></option>

<?php
}
}
catch(Exception $e){
       die('Erreur : '.$e->getMessage());
   }
?>
 </select>
             </div>
            <input type="text" class="form-control" placeholder="Numero Salle" name="numero_salle">
           </div>
           <div class="col-6">
            <input type="text" class="form-control" placeholder="Nbr de places" name="capacite_salle">
           </div>
         </div>
         </div>
          <div class="rows">
            <div class="col-12">
              <div class="bouton">
                <button type="submit" class="btn btn-primary mb-2">Envoyé</button>
              </div>
            </div>
          </div>
      </form>


</body>
</html>
