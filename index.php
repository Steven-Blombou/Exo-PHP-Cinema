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
