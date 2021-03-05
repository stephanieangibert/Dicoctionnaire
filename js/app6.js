function storing(data)
{
    var element = document.querySelector(".suppr");
    element.innerHTML = data;
}

function submitForm(element)
{ 
    var req =  createInstance();
    var url = document.ajax.url.value;
    var data = "url=" + url;
    req.onreadystatechange = function()
    { 
        if(req.readyState == 4)
        {
                if(req.status == 200)
                {
                        storing(req.responseText);	
                }	
                else	
                {
                        alert("Error: returned status code " + req.status + " " + req.statusText);
                }	
        } 
};

req.open("POST", "index.php?action=supprimer&amp;id=<?php echo($_SESSION['id']);?>", true); 

req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
req.send(data);
}