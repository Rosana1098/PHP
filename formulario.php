<html lang="es">

  <head>
    <link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crear Cuenta</title>
  </head>
  <body>

	<div class="cont">

			<h1>Create Account</h1>
			<br>
				<form id="form" method="post" action="">
					<div>
						<p>Nombre</p>
						<input type="text" id="nombre" name="nombre" class="form-input" required>
					</div>
					<br>

					<div>
						<p>Apellido</p>
						<input type="text" id="apellido" name="apellido" class="form-input" required>
					</div>
					<br>

					<div>
						<p>Email</p>
						<input type="email" id="email" name="email" class="form-input" required>
					</div>
					<br>


					<input type="submit" id="check" name="check" value="ENVIAR" class="form-btn">

				</form>

				<?php

				if($_POST){
					$nombre = $_POST['nombre'];
					$apellido
					$email = $_POST['email'];

					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "bbddlaboratorio";

					$conn = new mysqli($servername, $username, $password, $dbname);

					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}

					if (!empty($nombre) || !empty($apellido) || !empty($email) {
						$sql = "INSERT INTO USUARIO (NOMBRE, APELLIDO, EMAIL)
						VALUES ('$nombre', '$apellido', '$email')";

						if ($conn->query($sql) === TRUE) {
							echo "Registro completado con éxito.";
						} else {
							echo "Error al registrar.";
						}
					} else {
						echo "Todos los campos deben rellenarse.";
					}


					$conn->close();
				}

				?>

	</div>
  </body>
</html>