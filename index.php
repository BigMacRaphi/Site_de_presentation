<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>titre</title>
</head>
<body>

	<!-- Menu de navigation -->
	<?php include 'menunavigation.php'; ?>

	<form method="post">
		<input type="text" name="pseudo" id="pseudo" placeholder="Votre identifiant" required=""><br/>
		<input type="text" name="age" placeholder="votre âge" required=""><br/>
		<input type="text" name="email" placeholder="votre e-mail" required="">
		<input type="submit" name="formsend" id="formsend">
	</form>

	<?php 
		include 'database.php';
		global $db;

		$q = $db->query("SELECT * FROM users"); 
		while ($user =$q->fetch()) {
			echo "id " . $user['id'] . " pseudo : " . $user['Pseudo']. "<br/>";
		}
		if(isset($_POST['formsend'])){
			$pseudo =$_POST['pseudo'];
			$age =$_POST['age'];
			$email = $_POST['email'];

			if(!empty($pseudo) && !empty($age) && !empty ($email)){
				echo "votre pseudo :".$pseudo."<br/>";
				echo "Votre age :".$age."<br/>";
				echo "Votre email :".$_POST['email'];
			}
		}
		?>
</body>
</html>
