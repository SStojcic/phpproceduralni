<?php include 'php/konekcija.php';

$partialSerije=$_POST['partialSerije'];
$serije=mysql_query("SELECT naziv FROM serije WHERE naziv like '%$partialSerije%'");

 while($serija=mysql_fetch_array($serije)){
	 
	 echo "<div>".$serija['naziv']."</div>";
 }
?> 