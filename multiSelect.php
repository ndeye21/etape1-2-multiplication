<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Atelier PHP - Étape 1</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<style>
		html {
		    height: 100%;
		}
		BODY {
			font-family: "Trebuchet MS", Helvetica, sans-serif;
			background-attachment: fixed;
			background: linear-gradient(#2196F3 250px, #EEEEEE 1px);
		}
		header {
			margin: auto;
			width: 570px;
			padding: 15px;
			color: #FFFFFF;
		}
		.contentbox {
			padding: 0px;
			margin: auto;
			width: 600px;

		}
		.maincontent {
			float: left;
			display: block;
			width: 596px;
			background-color: #FFFFFF;
			border-radius: 0.125rem;
			box-shadow: 0 0.125rem 0.3125rem 0 rgba(0, 0, 0, 0.25);
		}
		
		.action_buttons {
			float: left;
			width: 100%;
			margin-bottom: 5px;

		}
		
		.button {
			float: right;
			margin-right: 25px;
		}
		
		.button INPUT {
			margin:10px; padding: 5px;
			width: 100%;
			height: 40px;
			border-radius:0;
			border: 0px;
			background-color: transparent;
			font-size: 18px;
			color: #1976D2;
			border-radius: 0.2em;

		}
		
		.button INPUT:hover {
			background-color: #E3F2FD;

		}
		
		.fields {
			float: left;
			margin: auto;
			width: 540px;
			padding: 25px;
			color: #424242;		
		}
		
		SELECT {
				width: 80%;
			    padding:3px;
			    height: 30px;
			    margin: 0;
			    border-radius:1em;
			    font-size: 18px;
			    
		}

		
		
	</style>
</head>
<body>

<header>
	<h1>Atelier PHP - Étape 1</h1>
	<p>Afficher une table de multiplication</p>
</header>

<form action="Niveau-1/traimt.php" method="POST">

<section class="contentbox">
	<div class="maincontent">
		
		<div class="fields">
			<h3>Merci de sélectionner la table que vous voulez consulter:</h3>
			<select name="table">
				<option value="0">Table de 0</option>
				<option value="1">Table de 1</option>
				<option value="2">Table de 2</option>
				<option value="3">Table de 3</option>
				<option value="4">Table de 4</option>
				<option value="5">Table de 5</option>
				<option value="6">Table de 6</option>
				<option value="7">Table de 7</option>
				<option value="8">Table de 8</option>
				<option value="9">Table de 9</option>
				<option value="10">Table de 10</option>
			</select>
		</div>
	
		<div class="action_buttons">
			<div class="button"><input type="submit" value="Voir la table"></div>
			<div class="button"><input type="reset" value="Annuler"></div>
		</div>
	
	</div>	 
</section>

</form>
</body>
</html>