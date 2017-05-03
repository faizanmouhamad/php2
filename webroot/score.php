<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-utils/concise-utils.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-ui/concise-ui.min.css">
		<link rel="stylesheet" href="./css/style.css">

		<meta charset="UTF-8" />
		<title></title>
	</head>
	<body container>
		<h4 class="_bb1" >Réponses</h4>
		<ul>
      <?php
      $score = 0;
      if(isset($_POST['question1']) AND isset($_POST['question2']) AND isset($_POST['question3'])){
        if(($_POST['question1']) == "vrai"){
          $q1 = "bonne réponse";
          $score++;
        }
         if(($_POST['question1']) != "vrai"){
          $q1 = "mauvaise réponse";
        }
        if(($_POST['question2']) == "vrai"){
          $q2 = "bonne réponse";
          $score++;
        }
        if(($_POST['question2']) != "vrai"){
          $q2 = "mauvaise réponse";
        }
        if(($_POST['question3']) == "vrai"){
          $q3 = "bonne réponse";
          $score++;
        }
        if(($_POST['question3']) != "vrai"){
          $q3 = "mauvaise réponse";
        }
      }
   
      ?>
      <li><?php   
      echo "Question 1 :" . " " . $q1; ?></li>
      <li><?php
       echo "Question 2 :" . " ". $q2;?>   </li>
      <li><?php
       echo "Question 3 :" . " " . $q3;?>  </li>
      <h4><?php 
      echo "Score : " . " ". $score; ?></h4>
		</ul>
	</body>
</html>