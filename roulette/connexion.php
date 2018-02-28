<html>
	<head>
		<title>Le jeux de la roulette</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>

	<body>

		<div align="center">
			<img src="photo.png" >
		</div>
			
		<div align="center" id="connexion">
		
			

			<form method="POST" action="inscription.php"/><h3>Connexion</h3>
				<table >
				    <tr>
						<td align="right">
							<label for="pseudo">Pseudo: </label>
						</td>
						<td>
							<input type="text" placeholder="Votre pseudo " id="pseudo" name="pseudo"
							 value ="<?php if(isset($pseudo)) { echo $pseudo;} ?>"/>
						</td>
				</tr>
				</tr>		
					<tr>
						<td align="right">
							<label for="mail">Mail: </label>
						</td>
						<td>
							<input type="email" placeholder="Mot de passe " id="mail" name="mail"
							 	value ="<?php if(isset($mail)) { echo $mail;} ?>"/>
						</td>
					</tr>
 					
			</table>
				<input type="submit" name="connexion" value="Se connecter"/>
	</form>
</div>

<div align="center" id="inscris">
	<h2>Pas encore inscrit?</h2>
	<a href="inscription.php">Inscrivez-vous</a>


</body>

</html>