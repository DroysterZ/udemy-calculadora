<?php
if (count($_POST) && isset($_POST["op"])) {
	switch ($_POST["op"]) {
		case "soma":
			$res = $_POST["n1"] + $_POST["n2"];
			break;
		case "subt":
			$res = $_POST["n1"] - $_POST["n2"];
			break;
		case "mult":
			$res = $_POST["n1"] * $_POST["n2"];
			break;
		case "divi":
			$res = $_POST["n1"] / $_POST["n2"];
			break;
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<!-- Correcao de bug favicon not found -->
	<link rel="shortcut icon" href="#" />

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
	<!--Import custom.css-->
	<link type="text/css" rel="stylesheet" href="css/custom.css" media="screen,projection" />

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Udemy - PHP 7 - Calculadora</title>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col s12">
				<h4 class="header center-align">Minha Calculadora</h4>
				<div class="card horizontal">
					<div class="card-stacked">
						<div class="card-content">
							<div class="row">
								<form method="post">
									<div class="input-field col s6">
										<input type="number" name="n1" id="n1">
										<label for="n1">Operando 1</label>
									</div>
									<div class="input-field col s6">
										<input type="number" name="n2" id="n2">
										<label for="n2">Operando 2</label>
									</div>

									<div class="input-field col s12">
										<button type="submit" name="op" value="soma" class="btn col s2 light-blue darken-1 truncate hoverable">Somar</button>
										<button type="submit" name="op" value="subt" class="btn col offset-s1 s2 deep-purple darken-3 truncate hoverable">Subtrair</button>
										<button type="submit" name="op" value="mult" class="btn col offset-s2 s2 light-green darken-1 truncate hoverable">Multiplicar</button>
										<button type="submit" name="op" value="divi" class="btn col offset-s1 s2 green darken-4 truncate hoverable">Dividir</button>
									</div>
								</form>
							</div>
						</div>
						<?php if ($res) { ?>
							<div class="card-action no-hover">
								<a href="#">Resultado: <?php echo $res; ?></a>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>