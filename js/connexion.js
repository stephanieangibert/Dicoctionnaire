let bouton=document.getElementById("pei");
let premierBloc=document.getElementById("c1");
let deuxiemeBloc=document.getElementById("bloc");
let troisièmeBloc=document.getElementById("bloc3");
let bouton2=document.querySelector(".mdpOublie");
let formInscrisToi=document.querySelector(".inscrisToi");
let input=document.querySelectorAll("input");
let messageSurLong=document.querySelector('.longueurMdp');
console.log(input);

console.log(bouton2);
bouton.addEventListener('click',function(){
premierBloc.style.display="none";
deuxiemeBloc.style.display="block";

})
bouton2.addEventListener("click",()=>{
    premierBloc.style.display="none";
    troisièmeBloc.style.display="block";
   
})

let couv=document.getElementById('couv');
let clicIci=document.getElementById('clicIci');
clicIci.addEventListener('click',function(e){
    e.preventDefault();
    couv.style.display="none";
    premierBloc.style.background="#333";
})

formInscrisToi.addEventListener("submit",(e)=>{

    if(input[6].value.length<5){
e.preventDefault();
messageSurLong.innerHTML="Il faut un mot de passe de plus de 4 caractères !";m

    }
  
})