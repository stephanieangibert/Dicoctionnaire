
const span=document.querySelectorAll("span");

let trajet=100;
for(i=0;i<span.length;i++){
    trajet=trajet+50;
    console.log(trajet);
    TweenMax.to(span[i],{
               opacity:1,             
               x:Math.floor(Math.random()*800-70),
                y:Math.floor(Math.random()*800-70),
                z:Math.floor(Math.random()*800+trajet-70),
                rotation:Math.floor(Math.random()*800-70)+'deg',                
   
       })
    
      }  
    
     