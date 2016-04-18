<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Cadastrando...</title>
   						
</head>
<body>

	<h2>Usuários</h2>
	<?php

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "base_teste";

				$conn = mysqli_connect($servername, $username, $password, $dbname);

				if (!$conn) {
				    die("Falha de conexão: " . mysqli_connect_error());
				}


				
				$nome = $_POST["post_Usuario"];
				$senha = $_POST["post_Senha"];
				$sql = "INSERT INTO `usuarios`(`nome`, `senha`) VALUES ('$nome','$senha')";


				if (mysqli_query($conn, $sql)) {
				    echo "<script>alert('Salvo com sucesso')</script>";
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}


				mysqli_close($conn);

				
				

?>
		        <section>
	 	
				 	<nav>
				 		<ul>
				 			<li><a href="imprime.php">Imprimir usuarios cadastrados!!!</a></li>
				 		</ul>
				 	</nav>
                </section>
	
</body>
</html>