 <!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Assistance</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
		 <link rel="manifest" href="manifest.json">
	 

            <!-- Fallback application metadata for legacy browsers -->
            <meta name="application-name" content="Assistance">
            <link rel="icon" sizes="16x16 32x32 48x48" href="icon.png">
            <link rel="icon" sizes="512x512" href="icon2.png">



</head>
<body>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div><img src="ent.jpg" class="ent" style="width: 50px; "></div>
	  <div class="container-fluid">
	    <a class="btn btn-outline" href="index.php">Lycée Henri Matisse</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav ml-md-auto">
	        <li class="nav-item">
	          <a class="btn btn-outline-dark" aria-current="page" href="contact.php">Contact</a>
	        </li>
	        
	      </ul>
	      
	    </div>
	  </div>
	</nav>
	
	  
	

	

</body>
</html>




<?php 

 
//Les variables php

 	$nom = $_POST['nom'];
 	$prenom = $_POST['prenom'];

	$salle = $_POST['salle'];
	$probleme = $_POST['probleme'];
	$e_mail = $_POST['e_mail'];
	


//echo ("bonjour ". $nom.' '. $prenom.' '.$salle.' '.$probleme.' '.$e_mail);

// Code sql pour se connecter au base de donnée

$mysqli = new mysqli('localhost','id17064196_hakim','Ali976@@.ben','id17064196_contact');
if ( $mysqli-> connect_errno) {

	echo "probleme de connection :" . mysqli_connect_error();
	
}
else
{
	// Insertion du formulaire dans une base de donnée
	$sql = "INSERT INTO mail(nom,prenom,salle,probleme,e_mail) VALUES('".$nom."', '".$prenom."', '".$salle."', '".$probleme."','".$e_mail."')";
}
if (!$mysqli-> query ($sql)) 
{
	echo "probleme d'insertion";
}
else
{
		//echo "Votre message a bien était envoyé.";
	
			//ERéception d'un message après validation du formulaire    

			$sql  = "Nom : ".$nom."<br/>Prénom : ".$prenom."<br/>Prénom : ".$salle."<br/>Probleme : ".$probleme."<br/>e_mail : ".$e_mail;

			//entête du mail

			$mailheaders = "FROM : $e_mail\n";

			

			$mailheaders .= "Content-type: text/html; charset= utf-8\n";

			//on envoi l'email

			//si le mail est envoyé

			if(mail('mloa.hakim@assistance-h-m.store', 'Incident', $sql, $mailheaders)){

				echo 'Votre message a bien était envoyé.';

			}

			//si il y a une erreur lors de l'envoi

			else{

				echo 'Erreur, email non envoyé.';

			}

			//le code d'envoie du mail n'est pas encore au point (erreurs de connexion au serveur mail)

		
	}


  ?>

<!DOCTYPE html>
<html>
<head>

</head>
<body >

	>

     	<article class="bouton">

     		<div class="container">
     			<div class="row">

					<p >
   					<input class="btn btn-outline-dark" type="button" onclick="window.location.href = 'index.php'" value="Retour"/>
    				</p>

    			</div>
    		</div>
    			

    	</article>

    	

     
</body>
</html>
