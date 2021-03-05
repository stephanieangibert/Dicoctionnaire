<?php 

require('controller/frontend.php');

try {
   if (isset($_GET['action'])) {
       if ($_GET['action'] == 'concept') {
           concept();
       }
    else if($_GET['action'] == 'menuConnexion')  {
        menuConnexion();
      
    }
    
    else if($_GET['action'] == 'subscribe')  {
      subscribe2();
   }
   else if($_GET['action'] == 'connexion')  {
      connexion();
   }
   else if($_GET['action'] == 'token')  {
       token();
    }
    else   if($_GET['action']=='nouveauMdp'){
       changeMdp($_GET['token']);
   }
    
   
   else if($_GET['action']=='page') {

           if(isset($_SESSION['id'])){
               pagePrincipale($_SESSION['id']);   
           }else{
               pagePrincipale22();
           }
                 
       
   
     
   } 
        

    
    else if($_GET['action']=='supprimer'){
       supprimer($_GET['id']);
      
   }

   }
else{
   if(isset($_SESSION['id'])){
       boiteAmots($_SESSION['id']);
     }else{
           //  boiteAmotsSeule();
         pagePrincipale22();
     }         

}          
}
catch(Exception $e) { 
   
   $e->getMessage();
   var_dump($e);
}
