<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">    
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/gsap.min.js"></script> 
   -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/style2.css">
    <title>Document</title>
</head>
<body>
    <div class="containerAll">
    <header>
    <div class="logo">
        <div class="expli">
            <h1>LAPSUS CLAVIS</h1>
            <H2 class="expliH2">Découvre des mots inexplorés</H2>
            <h4 class="expliH4">Cherche..apprends et sauvegarde dans ta boîte à mots</h4>
        </div>
        <div class="logoImg"><img src="public/images/LapsusClavis.png" alt=""></div>
       
    </div>
    <div class="container-menu">
         <input type="checkbox" class="navigationC" id="navi">
         <label for="navi" class="navigationBtn">
         <div class="navigationIcon"></div>
         </label>
         <div class="navigationGb"></div>
         <nav class="nav">
         <ul class="navList">
         <li class="navItem1">
         <a href="index.php" >Accueil</a>  
         </li>
         <li class="navItem1">
         <a href="index.php?action=concept" >Concept</a>  
         </li>
         <li class="navItem1">
         <a href="index.php?action=menuConnexion" >Connexion</a>  
         </li>
       
         </ul>
         </nav>       
    </div>
    </header>
    
   
    <section class="concept">
       
 
       
    <div id="poster">
	
    <div class="beauTitre">Concept</div>
    
    <p>Je voudrais vous proposer un nouveau concept qui est celui d'apprendre les mots du dico par coeur.En les cueillant au hasard, un hasard qui ferait bien les choses ! Les mots volent, glissent, s'étourdissent dans le capharnaüm d'un monde sensible et protéiforme !</p>

</div>
  
    <div class="flag">
  <a href="http://projet6.stephange.fr" target="_blank"><h4>@stephange.fr</h4></a>
  <img src="public/images/flag.png" alt="">
    </div>
</section>
</div>

   
<!--     
<script src="public/js/app2.js"></script>  -->
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js'></script>
    <script src="public/js/jquery.lettering.js"></script>
    <script>
		// DOM Ready
		$(function() {
			$("#poster .beauTitre, #poster p").lettering();
			$("#poster p span").each(function() {  $(this).css({ top: -(Math.floor(Math.random()*1001)+1500), left: Math.floor(Math.random()*1001)-500,  }); });
			setTimeout(function() {$('html').addClass("step-one");}, 1000);
			setTimeout(function() {$('html').addClass("step-two");}, 3000);
		});
	</script>
     <script src="public/js/app5.js"></script>  
</body>
</html>