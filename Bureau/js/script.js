/* pour le menu responsive */

function affiche(e){return"hidden"==document.getElementById(e).style.visibility?document.getElementById(e).style.visibility="visible":document.getElementById(e).style.visibility="hidden",!0}
  
/* pour le tableau responsive */
/* source : dvp.com           */  

for(var tds=document.getElementsByTagName("td"),i=0;i<tds.length;i++){var td=tds[i];if(td.hasAttribute("headers")){var th=document.getElementById(td.getAttribute("headers"));null!=th&&td.setAttribute("data-headers",th.textContent)}}