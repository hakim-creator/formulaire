<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="description" content="Signaler tout incident informatique que vous rencontrez.">
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



				
				



		
		

	<div class="container">
     	<div class="row">


     		
	<article class="incident">

		<div class="container">
     	<div class="row">
     		



     		

		<p class="text"> Pour signaler un incident, veuillez appuyer sur le bouton ci-dessous.
			</p>
			
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
									  <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
				  <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
				  <a href="formulaire.php"></a>
				</svg>

			


			<p class="signaler"> 

   	    	<input  class="btn btn-outline-dark" type="button" onclick="window.location.href = 'formulaire.php';" value="Signaler un incident"/> 

      		</p>

  <div class="option">		
<button class="btn btn-outline-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" style="width: 175px;">
  Plus d'option
</button>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel" style="color: black">Menu</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
        Sous-menu
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="btn btn-outline-dark" href="https://henri-matisse.mon-ent-occitanie.fr/" target="_blank" style="background-color: #09958C; width: 200px;">Lycée Henri Matisse</a></li>
        <li><a class="btn btn-outline-dark" href="https://www.ac-toulouse.fr/" target="_blank" style="background-color: #09958C;width: 200px;">Académie de toulouse</a></li>
        <li><a class="btn btn-outline-dark" href="https://www.laregion.fr/" target="_blank" style="background-color: #09958C; width: 200px;">La région occitanie</a></li>
      </ul>
    </div>
  </div>
  <div>
      <img class="image" src="lycee.jpg" style="width: 300px; height: 200px; ">
    </div>
</div>

      	
      	</div>
    </div>

  </article>

  </div>
    </div>




    <footer class="fo-footer">


    	<div class="fo-footer__infos"></div>
    	<div><img src="ent.jpg" class="rounded float-start" style="width: 50px; " alt="mon-ent-occitanie"></div>
    	<a href="https://henri-matisse.mon-ent-occitanie.fr/" target="_blank">
    	<h5 class="fo-footer_nom">Lycée générale et téchnologique Henri Matisse</h5>
    	</a>
    	<a href="https://www.laregion.fr/" target="_blank">
    		<div><img src="occitanie.png" class="rounded float-end" style="width: 100px; margin-right: 13px; margin-top: -20px;" alt="la region occitanie"></div>
    	</a>
    	
    	
    </footer>

    



</body>
</html>