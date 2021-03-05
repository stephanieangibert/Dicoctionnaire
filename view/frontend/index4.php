<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="public/css/style3.css">
    <title>Document</title>
</head>
<body>
  <div class="containerTout">
<header>
<div class="logo">
        <div class="expli">
            <h1 >LAPSUS CLAVIS</h1>
            <H2 class="expliH2">Découvre des mots inexplorés</H2>
            <h4 class="expliH4">Cherche..apprends et sauvegarde dans ta boîte à mots</h4>
        </div>
        <div class="logoImg"><img src="public/images/LapsusClavis.png" alt=""></div>
       
    </div>
    <div class="container-menu">
         <input type="checkbox" class="navigationC" id="navi">
         <label for="navi" class="navigationBtn">
         <span class="navigationIcon"></span>
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
<div class="containerPage4All">
<div class="container1" id="c1">
<p><i class="fas fa-user-check"></i></p>
<p>Connecte-toi</p>

<form action="index.php?action=connexion" method="POST" class="formConnexion">

<div class="input_container">
    <span class="input_icon"><i class="fas fa-envelope-open-text"></i></span>
     <input type="mail" name="email" placeholder="email">
</div>
  <div class="input_container">
    <span class="input_icon2"><i class="fas fa-unlock-alt"></i></span>
    <input type="password" name="mdp1" placeholder="mot de passe">
  </div>  
  <br>
  <div  class="mdpOublie">Mot de passe oublié</div>
  <br>  
  <input type="submit" value="envoyer" id="submit102022" name="submit2"> 
</form>

<div class="pei" id="pei">
    <p>Pas encore inscrit ?</p>
  
</div>

<span class="couverture" id="couv"><p id="clicIci">Click ici</p><?php 
         if(isset($erreur)):
            echo '<div id="avertissement" ><font color="red">'. $erreur.'</font></div>';endif;?> 
</div></span>







<div class="containerPage4" id="bloc">
    <p><i class="fas fa-user"></i></p>
    <p>Inscris-toi</p>
    <P><a href="index.php?action=menuConnexion" >Connexion</a></P>
 <form action="index.php?action=subscribe" method="POST" class=inscrisToi> 

 <div class="input_container">
    <span class="input_icon"><i class="fas fa-envelope-open-text"></i></span>
    <input type="mail" name="email" placeholder="email">
  </div>
  <div class="input_container">
    <span class="input_icon"><i class="fas fa-envelope-open-text"></i></span>
    <input type="text" name="pseudo" placeholder="pseudo">
  </div>
  <div class="input_container">
    <span class="input_icon"><i class="fas fa-unlock-alt"></i></span>
    <input type="password" name="mdp1" placeholder="mot de passe" id="passWord1">
  </div>
  <div class="input_container">
    <span class="input_icon"><i class="fas fa-unlock-alt"></i></span>
    <input type="password" name="mdp2"  placeholder="mot de passe" class="passWord2">
  </div>
  <br>  <br>  <br>
  <input type="submit" value="envoyer" id="submit" name="submit">
    <div class="longueurMdp"></div>
  </form> 
 </form>
</div>
<div class="container3" id="bloc3">
  <form action="index.php?action=token" method="POST">
 
    <div>Changer votre mot de passe</div>   

    <input type="mail" placeholder="Saississez votre email" name="email">
    <input type="submit" value="Envoyer" name="submit3">
    <P><a href="index.php?action=menuConnexion" >Connexion</a></P>
  </form>
</div>
</div>
<!-- </div> -->

    <script src="public/js/connexion.js"></script>
     <script src="public/js/app5.js"></script> 
 
</body>
</html>