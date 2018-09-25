<?php
 //echo "See on minu esimene PHP!";
  $firstName = "Andres";
  $lastName = "Naris";
  $dayToday = date("d"); 
  $yearToday = date ("Y");
  $monthToday = date ("m");
  $hourNow = date ("G");
  $minNow = date ("G.i");
  $weekdayNow = date("N") ;
  $daynames  = ["esmaspäev","teisipäev","kolmapäev","neljapäev","reede","laupäev","pühapäev"];
  //echo $daynames[1];
  //var_dump($daynames);
  $monthnames=["jaanuar","veebruar","märts","aprill","mai","juuni","juuli","august","september","oktoober","november","detsember"];
  $hourNow = date("G");
  $partOfDay = "";
  if ($hourNow < 8) { 
	$partOfDay = "varane hommik";   
  }
  if ($hourNow >= 8 and $hourNow < 16) { 
	$partOfDay = "koolipäev";
  }
  if ($hourNow >= 16) { 
	$partOfDay = "ilmselt vaba aeg";
  }
  
  
  $picNum = mt_rand(2, 43);
  //echo $picNum;
  $picURL = "http://www.cs.tlu.ee/~rinde/media/fotod/TLU_600x400/tlu_";
  $picEXT = ".jpg";
  $picFile = $picURL .$picNum .$picEXT; 
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
  <?php
  echo $firstName;
  echo " ";
  echo $lastName;
  ?>
  , õppetöö</title> 
</head>
<body> 
 <body style="background-color:#F1948A;">
  <h1> 
   <?php
   echo $firstName ." " . $lastName; 
   ?>, IF18</h1>
  <p>See leht on loodud <a href="http://www.tlu.ee" target="_blank">TLÜ</a>  õppetöö raames, ei pruugi parim välja näha ning kindlasti ei sisalda tõsiseltvõetavat sisu!</p>
  
  <p>Tundides tehtud: <a href="photo.php">photo.php</a></p>
  
  <?php
  echo "<p>Tänane kuupäev on: " .$dayToday ." ".$monthnames[$monthToday-1] .".</p> \n"; 
  //echo "<p> Täna on ".$weekdayNow .", ".$dateToday .".</p> \n";
  echo "<p> Täna on " .$daynames[$weekdayNow -1] .", ".$dayToday ." ".$monthnames[$monthToday-1]." " .$yearToday." .</p> \n";
  echo "<p>Lehe avamise hetkel oli kell " . date("H:i:s") .". Käes oli " .$partOfDay .".</p> \n";
  ?>
  <p> Folloge instast @andresnaris 
  <p> Andrus, minu kodutöö on tehtud! </p>
  <!--<img src="http://greeny.cs.tlu.ee/~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_1.jpg" alt="TLÜ Terra õppehoone" >-->
  
  <!--<img src="../../../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_1.jpg" alt="TLÜ Terra õppehoone" >-->
  <img src="<?php echo $picFile; ?>" alt="TLÜ Terra õppehoone">
  <p> Mul on ka sõber, kes teeb ka oma veebi <a href="http://greeny.cs.tlu.ee/~danigol/lambist.php" target="_blank">xd</a>
  <p> veel üks <a href="http://greeny.cs.tlu.ee/~laurton/" target="_blank">sõber</a>
  <p> ma tean, et mul palju <a href="http://greeny.cs.tlu.ee/~patrpai/veebiproge/tund_3" target="_blank">sõpru<a/>
 
  
</body>
</html>