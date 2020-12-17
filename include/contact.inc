<!-- Traitement du formulaire de contact -->

<?php

if (isset($_POST['nom']) and isset($_POST['courriel']) and isset($_POST['message']))
{
echo "plop !<br />";
?>

<script type="text/javascript">
$( document ).ready(function() {
	$('#myModal').modal('toggle');
});
</script>

<?php
$to  = 'alexis.amand@gmail.com, '.$_POST['courriel'];

// Sujet
$subject = 'Message de Histoires de Poilus';

// message
$message = "Nom : ".$_POST['nom']."<br />"
			."Sujet : ".$_POST['sujet']."<br />"
			."E-mail : ".$_POST['courriel']."<br />"
			."Message : "."<br />".$_POST['message']."<br />";

			// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
			$headers = 'MIME-Version: 1.0'."\n";
			$headers .= 'Content-type: text/html; charset=utf-8'."\n";
			$headers .='From: "Message de Histoires de Poilus"<'.$_POST['courriel'].'>'."\n";

			$envoyer = mail($to, $subject, $message, $headers);

			if (!$envoyer)
				{
				echo '<p class="alert alert-warning" role="alert">erreur !</p>';
				$errorMessage = error_get_last()['message'];
				echo $errorMessage;
				}
			else
				{

				?>

				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Me contacter</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<div class="modal-body">
						<div class="alert alert-success">message envoyé !</div>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
					</div>
					</div>
				</div>
				</div>

				<?php

				}
}

?>

<!-- Affiche la modale de contact -->

<form method="POST">

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
	<h5 class="modal-title" id="exampleModalLabel">Me contacter</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>
  </div>
  <div class="modal-body">

	<div class="row align-items-center">
		<div class="col-6">

			<div class="form-group">
				<label>Nom (*)</label>
				<input type="text" name="nom" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Courriel (*)</label>
				<input type="text" name="courriel" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Message (*)</label>
				<textarea name="message" class="form-control" rows="5" required></textarea>
			</div>

			<p>(*) Tous les champs doivent être complétés</p>

		</div>
		<div class="col-6">
			<div class="row text-center">
				<div class="col-12 my-3">
					<h6><i class="fas fa-map-marker-alt"></i>&nbsp;Adresse</h6>
					<p>Valenciennes<br />
					Nord, France</p>
				</div>
				<div class="col-12 my-3">
					<h6><i class="far fa-address-card"></i>&nbsp;Me contacter</h6>
					<p>00.12.34.56.78<br />
					contact@supermail.com<br />
					Ou <a href="#" target="_blank">via Skype</a></p>
				</div>
			</div>
		</div>
	</div>

  </div>
  <div class="modal-footer">
	<button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
	<button class="btn btn-primary" type="submit" name="formcontact">Envoyer</button>
  </div>
</div>
</div>
</div>

</form>