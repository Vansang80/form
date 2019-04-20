

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
   							<input type="text" name="prenom" placeholder="Code postal*"/><br />
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
   								<input type="submit" value="ÊTRE RECONTACTÉ" />
   							</div>
   						</div>
					</form>
				</div>
				<div>

				</div>
			<div>
		</section>
	</body>
</html>