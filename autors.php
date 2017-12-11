<?php
include 'php/functions.php';

 session_start();

   if($_SESSION['user_id']){
	   
	   echo " <a href='admin.php' class='apanel''>Admin panel</a>&nbsp;&nbsp;&nbsp;&nbsp;";
		   echo "<a href='logout.php' class='apanel' >Izloguj se</a>";
	 
   }
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="Sajt o interesantnoj seriji."/>
		<meta name="keywords" content="Arrow, Serija, Gledanje, Preporuka, Harvey Spectr " />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>ARROW</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="kodovi/jquery-2.2.1.js"></script>

		<script type="text/javascript" src="kodovi/jQuery.js"></script>
		<script type="text/javascript" src="kodovi/javascripte.js"</script>
		<link rel="shortcut icon" href="images/ikonica.png">
	

</script>



	

</script>
<script type="text/javascript">
	
	function dohvatiSerije(value){
		$.post("dohvatiserije.php",{partialSerije:value},function(data){
		$("#results").html(data);
	  });
	  }
	
	</script>
</head>

<body>
<div id="wrapper">
	<div id="header-wrapperr">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">ARROW</a></h1>
			</div>
			<div id="menu">
			<ul>
				
					<li class="current_page_item"><a href="index.php">POCETNA</a></li>
				
	
 
					
					
							
								
					<li><a href="#">LIKOVI</a>
								<ul id="meni">
										<li class="manja"><a href="oliver.php">Oliver Kvin</a></li>
									<li class="manja"><a href="felisiti.php">Felisiti Smouk</a></li>
									<li class="manja"><a href="laurel.php">Laurel Lans</a></li>
								</ul></li>
					<li><a href="galerija.php">GALERIJA</a></li>
					<li><a href="serije.php">SERIJE</a></li>
					
					 <div id="pretraga">
						<form name="formular">
			                    
							
							<div id="prikaz"></div>
						    
						
						
					
						<input type="text" name='user' id="tbPretraga" onkeyup="dohvatiSerije(this.value)" />
						<input class="dugme" type="button"  value="search" onClick="pronadjiPodatke();">
							  <div id="results"></div>
							</form>
				    </div> 
				
				</ul>
	</ul>
		
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div class="post1">
			<h2 class="title">O meni  </h2>
		
		
		<img  src="images/autor.jpg" width="400" height="600">
	<p>Zovem se Stefan Stojčić 141/14, student sam druge godine Visoke ICT škole. Volim da igram košarku, pratim sve sportove, gledam filmove i serije.
	</p>
		</br>
		
		
							<form method="post" action="#">
									<table>
											
											<form action="anketa.php" method="post">
<strong>Vasa omiljena serija?</strong><p>
<input name="anketa" type="radio" value="Vikings" />Vikings<br />
<input name="anketa" type="radio" value="Suits" />Suits<br />
<input name="anketa" type="radio" value="Arrow" />Arrow<br />
<input name="anketa" type="radio" value="BreakingBad" />Breaking Bad<br />

<input type="submit" class="dugme" name="post" value="Posalji odgovor"/>
</form>
											</tr>
									</table>	
							</form>
							<div id="prikaziRezultatAnkete">
							Rezultat:<?php

$odgovor = $_POST['anketa'];
$post = $_POST['post'];

mysql_connect("localhost","root","");
mysql_select_db("sajt");

$upit = mysql_query("SELECT * FROM anketa WHERE odgovor = '$odgovor'");
$red = mysql_fetch_assoc($upit);

$rate = $red['rate'];
$new_rate = $rate+1;


 


 $query = mysql_query("UPDATE anketa SET rate = '$new_rate' WHERE odgovor = '$odgovor'");

 


echo "<h3>Rezultati</h3>";

$q = mysql_query("SELECT * FROM anketa ORDER BY rate DESC");
while($row = mysql_fetch_assoc($q)){
 $odgovor = $row['odgovor'];
 $rate = $row['rate'];
 
 echo "$odgovor-$rate<br/>";
}

?>
							<div id="rezultatAnkete"></div>
							
						</div>
	
	</div>
	<!-- end #page --> 
	
</div>
</div>
	</div>
</div>
<div id="footer">
	<div id="menu2">
				<ul>
					
					<li><a href="dokumentacija.pdf" target="_blank">Dokumentacija</a></li>
					<li><a href="sajtmap.xml">Sitemap</a></li>
					
					<li><a href="registracija.php">Registracija</a></li>
					<li><a href="autors.php">O MENI</a></li>
				</ul>
</div>
</div>

<!-- end #footer -->
</body>
</html>
