<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/style2.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>L'or des mots du dico</h1>
        <div class="container-menu">
            <div class="circle-menu">
                <a href="index.php" class="lien">
                     <p class="lienMenu">accueil</p> 
                </a>
                <a href="index.php?action=connexion" class="lien">
                     <p class="lienMenu">connexion</p> 
                </a>
                <a href="index.php?action=connexion" class="lien">
                     <p class="lienMenu">boîte à mots</p>
                </a>
            </div>
            <div class="btn-circle">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </header>
    <div class="bienvenue"><?php if(isset($_SESSION['pseudo'])){echo "Bienvenue  " .ucfirst( $_SESSION['pseudo']);}?></div>
    <section class="partie3">
    <?php
    if(isset($_SESSION['id'])){
        while ($data = $motsAmoiMeme->fetch())
{
    ?>
        <div class="containerBox">
      
             <div class="card">
               <div class="face face1">
                    <div class="content">
<h3>   <?php echo htmlspecialchars($data['mot']); ?></h3>
                    </div>
               </div>
               <div class="face face2">
<div class="content">
    <form action="" class="form3">
   <textarea cols="50" rows="20" ><?php  echo (($data['def'])); ?> </textarea>
 <!-- <input type="submit" value="Supprimer" name="submit22"> -->
<a href="index.php?action=supprimer&amp;id=<?php echo($data['id']);?>">Supprimer</a> 
</form>
</div>
               </div>
            </div> 
        </div>
       

<?php
} 
        
    }else{?>
     <div class="containerBox">
      
      <div class="card">
        <div class="face face1">
             <div class="content">
<h3>   Créer tes boites </h3>
             </div>
        </div>
        <div class="face face2">
<div class="content">
<form action="" class="form3">
<textarea cols="50" rows="20" >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati velit illo eos, inventore corrupti magni odit labore, ducimus assumenda omnis, voluptatibus dolore?</textarea>
<input type="submit" value="ok">
</form>
</div>
        </div>
     </div> 
 </div>

 <?php   }



?>
           
    </section>
    <script src="public/js/app.js"></script>
    <script src="public/js/app2.js"></script>
    <script src="public/js/app3.js"></script>
</body>
</html>