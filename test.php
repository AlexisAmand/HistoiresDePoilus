<div style="margin-left:30px;position:fixed;background-color:white"><?php
<p> Les visites se font sur réservation. <br>
Sélectionnez une date et un horaire puis validez</p>
<div style="margin-left:450px">
Nous situer sur la carte :<br>
<span style="margin-left:50px"> - 20 km d'Epernay</span><br>
<span style="margin-left:50px"> - 27 km de Château Thierry</span><br>
<span style="margin-left:50px"> - 40 km de Reims</span><br>
<span style="margin-left:50px"> - 110 km de Paris</span><br><p></p>
<img src ="images/carte_michelin.jpg" style="margin-left:70px" height="300px" alt="" >
</div>
<FORM NAME="calendrier" ACTION="index.php?page=visites" METHOD="post" style="margin-top:-380px"> 
 
     ICI TOUT LE SCRIPT DU CALENDRIER
 
<div style="margin-left:250px; margin-top:-150px">
	<input type="radio" name="horaire[]" value="15h" />15 heures <br>
	<input type="radio" name="horaire[]" value="16h" />16 heures <br>
	<input type="radio" name="horaire[]" value="17h" />17 heures <p>
	Validez votre choix.</p>
	<img src="images/valider.png" name="valider_choix" alt="" />
</div>
</FORM>
</div>