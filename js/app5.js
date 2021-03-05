const expliH2=document.querySelector(".expliH2");
const expliH4=document.querySelector(".expliH4");
let largeur=window.innerWidth;
const header=document.querySelector("header");
const boxes=document.querySelectorAll(".containerBox");
const retourne=document.querySelector(".retourne");

if(largeur<815){
    expliH2.style.display="none";
    expliH4.style.display="none";
   let nouveauH4=document.createElement("h4");
    header.appendChild(nouveauH4);
    nouveauH4.setAttribute("class","activeH4");
    nouveauH4.innerHTML="Découvre des mots, cherche, apprends et sauvegarde dans ta boîte !";  
    retourne.insertBefore(partie3,boxes[1]);
    retourne.insertBefore(partie4,boxes[2]);
}