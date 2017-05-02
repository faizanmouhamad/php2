    <!DOCTYPE html>
    <html lang="fr">
    	<head>
    		<meta charset="UTF-8" />
    		<title></title>
    		<link rel="stylesheet" href="https://cdn.concisecss.com/concise.min.css">
    		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-utils/concise-utils.min.css">
    		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-ui/concise-ui.min.css">
    		<link rel="stylesheet" href="./css/style.css">
				<style>input[type="text"],select{display:inline-block;width:auto;}</style>
    	</head>
    	<body container>
				<?php
				$op1 = $_POST["op1"];
				$op2 = $_POST["op2"];
				$operation = $_POST["operation"];
				$res = "";
				
				
				if($_POST["operation"] == '+'){
					$res = $op1 + $op2;
				} else if($_POST["operation"] == '-'){
					$res = $op1 - $op2;
				}else if($_POST["operation"] == 'x'){
					$res = $op1 * $op2;
				} else if($_POST["operation"] == '/'){
			 if($op2 == 0){
				 echo "On ne peut pas diviser par 0 imbecile!";
			 }
				 $res = $op1 / $op2;
				}
				echo "<li> $op1 $operation $op2 =  $res</li>";
							$op1 = $res;
				?>
    		<h3 class="_bb1">Calculatrice</h3>
    		<form  class="_text-center" method="POST">
    			<!-- opérande 1 -->

					<?php
						if(isset($res))
							echo '<input placeholder="un nombre" type="text" name="op1" value="'.$res.'"/>';
						
						else
							echo '<input placeholder="un nombre" type="text" name="op1"/>';
						
					?>

    			<!-- opération -->

    			<select name="operation">
    				<option value="+">+</option>
    				<option value="-">-</option>
    				<option value="x">x</option>
    				<option value="/">/</option>
    			</select>

    			<!-- opérande 2 -->

    			<input placeholder="un nombre" type="text" name="op2" />

    			<!-- bouton -->

    			<button type="submit" name="soumis"> Calculer</button>

    		</div>
    	</body>
    </html>

