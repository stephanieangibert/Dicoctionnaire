let minus=document.querySelectorAll(".plusMoins");
let blocks=document.querySelectorAll(".block");
let bouton1=document.querySelector(".bouton1");
let bouton2=document.querySelector(".bouton2");
let bouton3=document.querySelector(".bouton3");
const partie3=document.querySelector(".partie3");
const partie4=document.querySelector(".partie4");
const partie5=document.querySelector(".partie5");
const power1=document.querySelector(".power1");
const power2=document.querySelector(".power2");
const power3=document.querySelector(".power3");
const suppr=document.querySelector(".suppr");

let k;

    minus.forEach(moins=>{
        moins.addEventListener("click",(e)=>{
             for(i=0;i<minus.length;i++){
                if(minus[i]==e.target){
                    k=i;
                    console.log(blocks[k]);
                    console.log(k);
                    blocks[k].classList.toggle('active'); 
                    minus[i].classList.toggle("fa-chevron-circle-down"); 
                    minus[i].classList.toggle("fa-chevron-circle-up"); 
                   
                }
                 if(minus[i]!==e.target && window.innerWidth>1277){
                     blocks[i].classList.toggle('active1'); 
                 }              
                
            }         
           
        
        })
    })

 bouton1.addEventListener("click",()=>{
   partie3.classList.add("partie33");
   const distance1=partie3.offsetTop;
   window.scrollTo(0,distance1); 
   console.log(partie3.offsetTop);
 })  
 bouton2.addEventListener("click",()=>{ 
    partie4.classList.add("partie44");
    const distance2=partie4.offsetTop;
   window.scrollTo(0,distance2); 
  })
  bouton3.addEventListener("click",()=>{
   partie5.classList.add("partie55");
   const distance3=partie5.offsetTop;
   window.scrollTo(0,distance3); 
 })   
power1.addEventListener("click",()=>{    
    partie3.classList.remove("partie33");
    console.log(k);
   console.log(blocks[k].getAttribute("class")) ;
   for(i=0;i<blocks.length;i++){
       if(i!==k){
blocks[i].classList.remove('active1');
       }else{
        blocks[k].classList.remove('active');
        minus[k].classList.remove("fa-chevron-circle-up");
        minus[k].classList.add("fa-chevron-circle-down");
       }
   }
 
}) 
power2.addEventListener("click",()=>{
    partie4.classList.remove("partie44");
    for(i=0;i<blocks.length;i++){
        if(i!==k){
 blocks[i].classList.remove('active1');
        }else{
         blocks[k].classList.remove('active');
         minus[k].classList.remove("fa-chevron-circle-up");
         minus[k].classList.add("fa-chevron-circle-down");
        }
    }
}) 
power3.addEventListener("click",()=>{
    partie5.classList.remove("partie55");
    for(i=0;i<blocks.length;i++){
        if(i!==k){
 blocks[i].classList.remove('active1');
        }else{
         blocks[k].classList.remove('active');
         minus[k].classList.remove("fa-chevron-circle-up");
         minus[k].classList.add("fa-chevron-circle-down");
        }
    }
  
}) 
  


