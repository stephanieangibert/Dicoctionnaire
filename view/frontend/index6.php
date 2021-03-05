<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
     <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet"> 
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">  
    <link rel="stylesheet" href="public/css/style.css">
 
    <title>Document</title>
</head>
<body ontouchstart="">
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
  
    <div class="container">
  
     <div class="sousContainerA">
         <div class="crayon"><img src="public/images/crayonBois.png" alt=""></div>
         <div class="form11">
     <form method="" class="form1">     
        <div class="choix">
        <input type="text" name="text" id="text" autocomplete="off" required>
  <label for="Text" class="nomLabel">Saisis ton mot...</label>
  <span class="focuss"></span>
   <input type="submit" value="Ok" id="def" name="submit">
 
            </div>
       
     
    </form>
    </div>
    <div class="boiteSecrete">
           <ul>
               <li id="mot1" class="liMot">Choisis</li>
               <li id="mot2" class="liMot">ton</li>
               <li id="mot3" class="liMot">mot....</li>
           </ul>  
            
     </div> 
     </div>
     <div class="sousContainerB">
        <div class="carreReponse" >
      
     <form method="POST" action="index.php?action=page&amp=id=" id="formReponse">  
         <div class="defDuMot">
           <p>Définition du mot :</p>     
          
           <input type="text" id="leMotChoisis" name="mot">   
           </div> 
          <div id="averti22"><?php if(isset($erreur22)):
            echo '<div id="avertiPHP" ><font color="black">'. $erreur22.'</font></div>';endif;?></div> 
         
           <div class="defDuMotFlex">     
         
           <textarea name="def"   id="definition"></textarea>
           <div class="check">
               <div class="sousCheck">
                    <input type="radio" id="motPrefere" name="typeBoite" value="motPrefere">
                    <label for="motPrefere" class="labelCkeck">Mot préféré</label><br>
                </div>
                    <div class="sousCheck">
                    <input type="radio" id="motApprendre" name="typeBoite" value="motApprendre">
                    <label for="motApprendre" class="labelCkeck">Mot à apprendre</label><br>
                </div>
                    <div class="sousCheck">
                    <input type="radio" id="motRare" name="typeBoite" value="motRare">
                    <label for="motRare" class="labelCkeck">Mot rare</label>
                </div>

           <input type="submit" name="submitMot" value="enregistrer" id="reponseBtn" class="etat"> 
           </div> 
           </div>     
          
 </form> 
         </div>
 <div class="carreSynonyme">
   
 <p class="titre">Synonyme</p>
 <div class="synonyme1">
               <div class="syn1">
                    <p id="synonyme1"></p> 
               </div>  
               <div class="syn2">    
                   <p id="synonyme2"></p>
               </div>   
            <div class="syn3">   
                    <p id="synonyme3"></p> 
               </div>  
               <div class="syn4">
                   <p id="synonyme4"></p> 
                </div> 
                <div class="syn5">           
                   <p id="synonyme5"></p> 
               </div>   
    
               </div>
</div>
<div class="carreAnthonyme">
<p class="titre">Antonyme</p>
<div class="ant1">
<div class="syn1">
                    <p id="antonyme1"></p> 
               </div>  
               <div class="syn2">    
                   <p id="antonyme2"></p>
               </div>   
            <div class="syn3">   
                    <p id="antonyme3"></p> 
               </div>  
               <div class="syn4">
                   <p id="antonyme4"></p> 
                </div> 
                <div class="syn5">           
                   <p id="antonyme5"></p> 
               </div>   
     </div>
    </div>
</div>     

<div class="bienvenue"><?php if(isset($_SESSION['pseudo'])){echo "Bienvenue  " .ucfirst( $_SESSION['pseudo']);}?></div>
   <h3 class="motAuPseudo">Retourne tes boîtes à mots !</h3>
<section class="retourne">
   <div class="containerBox">     
            <div class="card">
              <div class="face face1">
                   <div class="content">
                
<h3> Mots préférés </h3>
         </div>             
              </div>
              <div class="face face2">
            
<div class="content"> 
<img src="public/images/livre1.jpg" alt="">
  <div class="bouton1">Allez voir !</div>

         </div>
              </div>
           </div> 
        </div> 
        <div class="containerBox">
     
     <div class="card">
       <div class="face face1">
            <div class="content">
             
<h3>Mots à apprendre</h3>
</div>
           
       </div>
       <div class="face face2">
          
<div class="content">
<img src="public/images/livre2.jpg" alt="">
<div class="bouton2">Allez voir !</div>


</div>
       </div>
    </div> 
 </div> 
 <div class="containerBox">
     
     <div class="card">
       <div class="face face1">
            <div class="content">
            <div class="contentTitre">         
<h3> Mots rare  </h3>
         </div>
            </div>
       </div>
       <div class="face face2">
<div class="content">
<img src="public/images/livre3.jpg" alt="">
<div class="bouton3">Allez voir !</div>
</div>
       </div>
    </div> 
         </div>
 
        </section>               

 <section class="partie3"> 
     <div class="contentTitre">
 <h4>Mots préférés</h4><i class="fas fa-power-off power1"></i>
 </div>
 <div class="containerMot">

 <?php
   if(isset($_SESSION['id'])){
       while ($dataMP = $motsAmoiMemeMP->fetch())
{?>
        <div class="block" id="delete<?php echo($dataMP['id']);?>">
            <div class="contentHaut">
            <h4> <?php echo htmlspecialchars($dataMP['mot']); ?></h4>
            <i class="plusMoins fas fa-chevron-circle-down"></i>
            </div>
            <p><?php  echo (($dataMP['def'])); ?>          
            
            </p>
            <a  class="suppr" id="<?php echo($dataMP['id']);?>" href="index.php?action=supprimer&amp;id=<?php echo($dataMP['id']);?>">Supprimer</a> 
        </div>
        <?php
    } }?>  
         </div>
   
</section>  

<section class="partie4">
    <div class="contentTitre">
<h4>Mots à apprendre</h4><i class="fas fa-power-off power2"></i>
</div>
<div class="containerMot">
 <?php
   if(isset($_SESSION['id'])){
       while ($dataAP = $motsAmoiMemeAP->fetch())
{?>
        <div class="block" id="delete<?php echo($dataAP['id']);?>">
            <div class="contentHaut">
            <h4> <?php echo htmlspecialchars($dataAP['mot']); ?></h4>
            <i class="plusMoins fas fa-chevron-circle-down"></i>
            </div>
            <p><?php  echo (($dataAP['def'])); ?>
            
            </p>
            <a  class="suppr" id="<?php echo($dataAP['id']);?>" href="index.php?action=supprimer&amp;id=<?php echo($dataAP['id']);?>">Supprimer</a>
        </div>
        <?php
    } }?>  
         </div>    

</section>

<section class="partie5">
    <div class="contentTitre">
<h4>Mots rares</h4><i class="far fas fa-power-off power3"></i>
</div>
<div class="containerMot">
 <?php
   if(isset($_SESSION['id'])){
       while ($data = $motsAmoiMeme->fetch())
{?>
        <div class="block" id="delete<?php echo($data['id']);?>">
            <div class="contentHaut">
            <h4> <?php echo htmlspecialchars($data['mot']); ?></h4>
            <i class="plusMoins fas fa-chevron-circle-down"></i>
            </div>
            <p><?php  echo (($data['def'])); ?>
            
            </p>
            <a  class="suppr" id="<?php echo($data['id']);?>" href="index.php?action=supprimer&amp;id=<?php echo($data['id']);?>">Supprimer</a>
        </div>
        <?php
    } }?>  
         </div>    

</section>
<div class="containFlag">
<div class="flag">
  <a href="http://projet6.stephange.fr" target="_blank"><h4>@stephange.fr</h4></a>
  <img src="public/images/flag.png" alt="">
    </div>
    </div>
</div>
   <script src="public/js/app.js"></script>
   <script src="public/js/app3.js"></script>
   <script src="public/js/app4.js"></script>
   <script src="public/js/app5.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="public/js/app7.js"></script>



</body>
</html>

 




