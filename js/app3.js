let averti22=document.getElementById("averti22");

btn.addEventListener('click',(e)=>{    

    const valid=false;
    if(document.getElementById("motPrefere").checked && definition.value.length!==0){
valid=true;
    }
    if(document.getElementById("motApprendre").checked && definition.value.length!==0){
        valid=true;
    }
    if(document.getElementById("motRare").checked && definition.value.length!==0){
        valid=true;
    }  
    if(!valid && definition.value.length!==0){
        e.preventDefault();
       const element=document.createElement("div");
    //    element.setAttribute("class","averti1");
       averti22.appendChild(element);
       element.classList.toggle("averti1");
      element.innerHTML="Choisis une boîte 📦!";
        console.log("choisissez une boîte");
    }   
    if(definition.value.length==0){
        e.preventDefault();
        const element=document.createElement("div");
        // element.setAttribute("class","averti2");
        averti22.appendChild(element);
        element.classList.toggle("averti2");
        element.innerHTML="Valide ton choix ✔️!";
        console.log("Valide ton choix ✔️!");
    } 
    

})