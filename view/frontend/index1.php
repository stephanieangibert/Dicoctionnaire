
<?php
// $db = new PDO('mysql:host=db5001584995.hosting-data.io;dbname=dbs1320281;charset=utf8', 'dbu620408', '******');
$db = new PDO('mysql:host=localhost;dbname=dico;charset=utf8', 'root', '');
$temps_session=15;
$temps_actuel=date("U");
$ip_user=$_SERVER['REMOTE_ADDR'];


$req_ip_exist= $db->prepare("SELECT * FROM adresseip WHERE ip_user = ?");
$req_ip_exist->execute(array($ip_user));
$ip_exist=$req_ip_exist->rowCount();

if($ip_exist==0){
    $add_ip=$db->prepare("INSERT INTO adresseip(ip_user,time) VALUES (?,?)");
    $add_ip->execute(array($ip_user,$temps_actuel));
}else{
    $update_ip=$db->prepare("UPDATE adresseip SET compteur=compteur+1 WHERE ip_user = ?");
    $update_ip->execute(array($ip_user));
}
// $sesion_delete_time=$temps_actuel-$temps_session;
// $del_ip=$db->prepare("DELETE  FROM adresseip WHERE time < ? ");
// $del_ip->execute(array($sesion_delete_time));

$nbreuser=$db->query("SELECT * FROM adresseip");
$userNbr=$nbreuser->rowCount();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">   
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
         <div class="carreReponse">
        
     <form  method="POST" action="index.php?action=page&amp=id=">  
    
         <div class="defDuMot">
           <p>Définition du mot :</p>   
        
           <input type="text" id="leMotChoisis" name="mot">   
           </div>  
           <div id="averti22"> 
           <?php 
         if(isset($erreur22)):
            echo '<div id="averti" ><font color="black">'. $erreur22.'</font></div>';endif;?> 
                  </div>
           <div class="defDuMotFlex">      
     
          
         <textarea name="def"  id="definition"></textarea>
     
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
    <!-- </section>    -->

</div>     
<?php 
         if(isset($userNbr)):
            echo '<div><font color="#F4EBDE">'. $userNbr.'</font></div>';endif;?> 
 </section>   
 <div class="containFlag">
<div class="flag">
  <a href="http://projet6.stephange.fr" target="_blank"><h4>@stephange.fr</h4></a>
  <img src="public/images/flag.png" alt="">
    </div>
    </div>
</div>
   <script src="public/js/app.js"></script>  
   <!-- <script src="public/js/app3.js"></script> -->
   <script src="public/js/app5.js"></script>
</body>
</html>