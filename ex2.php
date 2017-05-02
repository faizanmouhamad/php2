<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-utils/concise-utils.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-ui/concise-ui.min.css">
		<link rel="stylesheet" href="./css/style.css">
		<style> input[type="text"]{ display:inline;width:auto;}</style>
	</head>
	<body container>
		<?php
		if (isset ($_GET['table'])) {
		$table=$_GET['table'];
		for($i=1;$i<=10;$i++){
			$res = $i * $table;
			echo "<li>$i X $table = $res </li>";
		}
		}
	?>

		<!-- À compléter -->

		<form  method="GET">
			<input type=text name="table" placeholder="table">
			<button  class="btn" type="submit">ENVOYER</button>
		</form>
	</body>
</html>