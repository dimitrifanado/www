
<?php


/*try {
    $bdd = new PDO('mysql:host=iutdoua-web.univ-lyon1.fr/phpmyadmin/; dbname=p1712543; charset=utf8',
 'p1712543', '303111');
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();}*/



if(isset($_POST['forminscription']))
{	
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$mail = htmlspecialchars($_POST['mail']);
	$mail2 = htmlspecialchars($_POST['mail2']);
	$mdp = sha1($_POST['mdp']);
	$mdp2 = sha1($_POST['mdp2']);

	if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
	{
		$pseudolength = strlen($pseudo);
		if($pseudolength <= 25)
		{
			if($mail==$mail2)
			{
				if(filter_var($mail, FILTER_VALIDATE_EMAIL))
				{
					if ($mdp==$mdp2)
					{
						/*$inscris = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) 
						VALUES(?,?,?)");
						$inscris-> execute(array($pseudo, $mail, $mdp));
						$erreur = "Votre compte a bien été crée";*/
					}
					else
					{
						$erreur = "Vos mots de passes ne correspondent pas";
					}
				}
				else
				{
					$erreur = "Votre email n'est pas valide";
				}
				
			}
			else
			{
				$erreur = "Vos adresses mails ne corespondent pas.";
			}
		} 
		else
		{
			$erreur = "Votre pseudo ne doit pas depassé 25 caractères";
		}
	}
	else
	{
		$erreur = "Tous les champs doivent êtres complétés.";
	}	
}

?>



<html>
	<head>
		<title>Le jeux de la roulette</title>
		<meta charset="utf-8">
	</head>

	<body>
		
		<div align="center">
			<h1>Inscription</h1>
			<br/><br/>

			<form method="POST" action="inscription.php"/>
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
					<tr>
						<td align="right">
							<label for="mail">Mail: </label>
						</td>
						<td>
							<input type="email" placeholder="Votre mail " id="mail" name="mail"
							 	value ="<?php if(isset($mail)) { echo $mail;} ?>"/>
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="mail2">Confirmez votre mail: </label>
						</td>
						<td>
							<input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2"
								 value ="<?php if(isset($mail2)) { echo $mail2;} ?>"/>
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="mdp">Mot de passe: </label>
						</td>
						<td>
							<input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp"/>
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="mdp2">Confirmation du mot de passe: </label>
						</td>
						<td>
							<input type="password" placeholder="Confirmez" id="mdp2" name="mdp2"/>
						</td>
					</tr>
					<tr>
						<td></td>

						<td align="center">
						 <input type="submit" name="forminscription" value="Je m'inscris"/>
					    </td>
				    </tr>
			     </table>
			</form>
			<?php
			if(isset($erreur))
			{
				echo'<font color="red">'.$erreur."</font>";
			}
			?>
	</body>
</html>