<?php
  require("functions.php");
  //kui pole sisse logitud, siis logimise lehele
  if(!isset($_SESSION["userId"])){
	  header("Location: index_1.php");
	  exit();
  }
  
  $mydescription="";
  $mybgcolor="";
  $mycolor="";
  
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<title>Profiili loomine</title>
	</head>
	<body>
    <h1>Profiili loomine</h1>
	<p>Oled sisse loginud nimega: <?php echo $_SESSION["firstName"]." ".$_SESSION["lastName"];?></p>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<textarea rows="10" cols="80" name="description"><?php echo $mydescription; ?>Kirjelda ennast: </textarea>
	<br>
	<label>Minu valitud taustavärv: </label><input name="bgcolor" type="color" value="<?php echo $mybgcolor; ?>">
	<br>
	<label>Minu valitud tekstivärv: </label><input name="color" type="color" value="<?php echo $mycolor; ?>">
	<br>
	<input type="submit" name="submitUserData" value="Loo profiil">
	<br>
	<p><a href="main.php">Tagasi pealehele</a></p>
	<br>
  </body>
</html>