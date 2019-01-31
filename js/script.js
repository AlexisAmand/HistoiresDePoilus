/* ----------------------- */
/* pour le menu responsive */
/* ----------------------- */

function affiche(idTableau)
{
	if(document.getElementById(idTableau).style.visibility=="hidden")
    	{
        document.getElementById(idTableau).style.visibility="visible";	        
    	}
    else
    	{
        document.getElementById(idTableau).style.visibility="hidden";        
    	}
    return true;
}
  
/* -------------------------- */
/* pour le tableau responsive */
/* source : dvp.com           */  
/* -------------------------- */
    
var tds = document.getElementsByTagName("td");
    
for(var i=0; i<tds.length; i++)
	{
    var td = tds[i];
    if(td.hasAttribute("headers"))
    	{
        var th = document.getElementById(td.getAttribute("headers"));
        if(th != null)
        	{
            td.setAttribute("data-headers", th.textContent);         
        	}
    	}        
	}