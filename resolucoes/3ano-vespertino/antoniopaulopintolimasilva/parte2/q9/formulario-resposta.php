<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="formulario-resposta.php" method="post">
				<label>Opções de clima:
					<select name="option">
						<option></option>
						<option value="1">Ensolarado</option>
						<option value="2">Ameno</option>
						<option value="3">Chuvoso</option>
						<option value="4">Nublado</option>
						<option value="5">Tempestuoso</option>
					</select>
			   </label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				$tempo = $_POST["option"] ?? 1;

				switch($tempo){
					case 1 
					 ;

					


				}
			
			
			?>
		</div>
	</div>
</body>
</html>