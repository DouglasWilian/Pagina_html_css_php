<?php
	include "conexao.php";

	$query = "SELECT * FROM dono_pet";
	$stmt = mysqli_query($dbc, $query);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Localização do Pet</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		<?php include "menu.php" ?>
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>CPF</th>
						<th>Telefone</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					while($registro = mysqli_fetch_object($stmt)){
						$html = "<tr>";
						$html .= "<td>" . $registro->id_dono . "</td>";
						$html .= "<td>" . $registro->nome . "</td>";
						$html .= "<td>" . $registro->cpf . "</td>";
						$html .= "<td>" . $registro->telefone . "</td>";
						$html .= "</tr>";
						echo $html;
					} 
					?>
					
				</tbody>
			</table>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>