
<!DOCTYPE html>
<html>
<head>
	<title>Enrolement</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">
	<link rel="shortcut icon" type="image/x-icon" href="image/logo.png">
</head>
<body>

	<form action="" method="post" enctype="multipart/form-data">
		<label for="nom">Nom:</label>
		<input type="text" name="nom" id="nom" maxlength="10" required>

			<br>

		<label for="prenom">Prenom:</label>
		<input type="text" name="prenom" id="prenom" maxlength="20" required>
			
			<br><br>

		<label for="personne">Type de personne:</label>
		<select name="personne" id="personne">
			<option value="default">Choisir un type</option>
			
		</select>

			<br><br><br>

		<label>Sexe:</label>
		<span id="sexe">
			<span>H</span><input type="radio" name="sexe" value="H">
			<span>F</span><input type="radio" name="sexe" value="F">
		</span>
		
			<br>

		<input type="file" name="photos" id="photos" title="Ajoutez une photo">
			
			<br>

		<label for="datenaissance">Date de naissance:</label>
		<input type="date" name="datenaissance" id="datenaissance" required>
			
			<br>

		<input type="submit" name="envoie" value="S'enroler" id="valide">

		<?php if (isset($message)) { ?> <p><?= $message ?></p>  <?php } ?>
	</form>


</body>
</html>