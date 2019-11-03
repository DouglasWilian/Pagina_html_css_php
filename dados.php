<?php
	include "conexao.php";

	$query = "SELECT * FROM dados";
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
						<th>Id_rastreamento</th>
						<th>Id_aparelho </th>
						<th>longitude</th>
						<th>latitude</th>
						<th>Data/Hora localização</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					while($registro = mysqli_fetch_object($stmt)){
						$html = "<tr>";
						$html .= "<td>" . $registro->id_rastreamento . "</td>";
						$html .= "<td>" . $registro->id_aparelho  . "</td>";
						$html .= "<td>" . $registro->longitude . "</td>";
						$html .= "<td>" . $registro->latitude . "</td>";
						$html .= "<td>" . $registro->dth_localizacao . "</td>";
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