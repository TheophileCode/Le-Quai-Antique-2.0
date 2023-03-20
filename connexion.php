<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Quai Antique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
</head> 
<body>
<?php

include 'html/header.html';
?>   
<div class="inscription">
    <h2>Inscription</h2>
	<form method="post" action="">
		<label>Nom :</label>
		<input type="text" name="nom"><br><br>
		<label>Prénom :</label>
		<input type="text" name="prenom"><br><br>
		<label>Adresse e-mail :</label>
		<input type="email" name="email"><br><br>
		<label>Mot de passe :</label>
		<input type="password" name="mot_de_passe"><br><br>
		<input class="submit" type="submit" name="register" value="S'inscrire">
	</form>
</div>
<hr>
<div class="connexion">
    <h2>Connexion</h2>
	<form method="post" action="">
		<label>Adresse e-mail :</label>
		<input type="email" name="email"><br><br>
		<label>Mot de passe :</label>
		<input type="password" name="mot_de_passe"><br><br>
		<input class="submit" type="submit" name="login" value="Se connecter">
	</form>
</div>	

<?php

include 'html/footer.html';
?>  
</body>
</html>
