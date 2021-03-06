<?php
 	if(isset($_POST['form-submit'])){
 		if (!empty($_POST['gender']) && !empty($_POST['prenom']) && !empty($_POST['nom']) &&
			!empty($_POST['code_postal']) && !empty($_POST['ville']) && !empty($_POST['social']) &&
			!empty($_POST['tel']) && !empty($_POST['ask'])){

 			$erreur = '';
 			$show = true;
 			$gender = htmlspecialchars($_POST['gender']);
 			$firstname = htmlspecialchars($_POST['prenom']);
 			$lastname = htmlspecialchars($_POST['nom']);
 			$zip = htmlspecialchars($_POST['code_postal']);
 			$city = htmlspecialchars($_POST['ville']);
 			$social = htmlspecialchars($_POST['social']);
 			$phone = htmlspecialchars($_POST['tel']);
 			$ask = htmlspecialchars($_POST['ask']);

 		} else {
 			$erreur = 'Veuillez remplir tous les champs !';
 			$show = false;
 		}
 	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel='stylesheet' href='style.css'>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:600" rel="stylesheet">
		<title>Up</title>
	</head>
	<body>
		<header>
			<div class='header'>
				<div class='header-logo'><img src='img/Logo-UP.png' alt='Up'></div>
				<div class='header-title'>
					<div>Titre</div>
				</div>
			</div>
		</header>
	
		<section>
			<div class='section'>
				<div class='form-position'>
					<form method="post" action="">
						<div class='form'>
							<span class='civility'>Civilité*</span>
   							<input type="radio" name="gender" value="Mme" id="Mme"/><label class='info'for="Mme">Mme</label>
   							<input type="radio" name="gender" value="Mr" id="Mr"/><label class='info' for="Mr">Mr</label><br />
   							<input class='position-name' type="text" name="prenom" placeholder="Prénom*"/><br />
   							<input type="text" name="nom" placeholder="Nom*"/><br />
   							<input type="text" name="code_postal" placeholder="Code postal*"/><br />
   							<input type="text" name="ville" placeholder="Ville*"/><br />
   							<input type="text" name="social" placeholder="Raison sociale*"/><br />
   							<input type="text" name="tel" placeholder="Téléphone*"/><br />
   						</div>
   						<div class='submit'>
   							<div class='ask'>Votre demande concerne :</div>
   							<div class='btn-radio'>
   								<div class='btn-radio-pos'>
   									<input class='cd' type="radio" name="ask" value="Chèque Déjeuner" id="ChequeDej"/>
   									<label class='radio_png' for="ChequeDej"><img src='img/chequeDejeuner.png' alt='chequeDejeuner'></label>
   								</div>
   								<div class='btn-radio-pos'>
   									<input class='cd' type="radio" name="ask" value="Cadhoc" id="Cadhoc"/>
   									<label class='radio_png' for="Cadhoc"><img src='img/Cadhoc.png' alt='Cadhoc'></label>
   								</div>
   								<div class='btn-radio-pos'>
   									<input class='cd' type="radio" name="ask" value="Chèque Domicile" id="ChequeDom"/>
   									<label class='radio_png' for="ChequeDom"><img src='img/ChequeDomicile.png' alt='ChequeDomicile'></label>
   								</div>
   							</div>
   							<div class='btn-submit'>
   								<div class='arrow'>
   									<div class='arrow-position'><img src='img/arrow.png' alt='arrow'></div>
   								</div>
   								<input type="submit" name='form-submit' value="ÊTRE RECONTACTÉ" />
   							</div>
   							<div class='error'><?php if($erreur) echo $erreur ?></div>
   						</div>
					</form>
				</div>
			<div>
		</section>
		<section>
			<?php 
				if ($show){
					echo "
						<div class='information'>
							<p>Information concernant votre demande :</p>
							<p>Civilité : {$gender}</p>
							<p>Prénom : {$firstname}</p>
							<p>Nom : {$lastname}</p>
							<p>Code postal : {$zip}</p>
							<p>Ville : {$city}</p>
							<p>Raison sociale : {$social}</p>
							<p>Téléphone : {$phone}</p>
							<p>Demande : {$ask}</p>
						</div>
					";
				}
			?>
		</section>
	</body>
</html>