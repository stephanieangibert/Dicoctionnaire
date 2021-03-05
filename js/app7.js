let toutSuppr=document.querySelectorAll(".suppr"); 
 console.log(toutSuppr);
 
$(document).ready(function(){
toutSuppr.forEach(suppr=>{
    suppr.addEventListener('click', (e) => {
        e.preventDefault();    
       let id=suppr.getAttribute("id"); 
    
       console.log(id);
       let urlAction="index.php?action=supprimer&amp;id="+id;
       console.log(urlAction);
 
       $.ajax({         
           url:urlAction, 
           type: 'post',   
           data:{
               delete_id:id
           },
           
            success: function(data) {
              $('#delete'+id).hide();
              console.log( $('#delete'+id));
             if(window.innerWidth>1277){
                
                     for(i=0;i<minus.length;i++){
                        // blocks[i].classList.add('active'); 
                        blocks[i].classList.remove('active1'); 
                     }
                
             }
            },
           error: function (jqXHR, textStatus, errorThrown) {
               console.log("coucou");
           }
         
       });       

   });
})
})
