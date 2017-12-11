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
<script type="text/javascript">
	
	function dohvatiSerije(value){
		$.post("dohvatiserije.php",{partialSerije:value},function(data){
		$("#results").html(data);
	  });
	  }
	
	</script>


	

</script>

</head>

<body>
<div id="wrapper">
	<div id="header-wrapperr">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Arrow</a></h1>
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
	
		
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		
		<div class="post1">
		
		<table border='1'>
		<?php


if(isset($_GET['start'])){
 $start = $_GET['start'];
}else{
 $start = 0;
}

mysql_connect("localhost","root","");
mysql_select_db("sajt");


$br = mysql_num_rows(mysql_query("SELECT * FROM serije"));
$pps = 3;

$q = mysql_query("SELECT * 
FROM `serije` 
LIMIT $start , $pps");

while($r = mysql_fetch_assoc($q)){
 echo    "<tr><th >" .$r['naziv']."</th>  <th>".$r['opis']."<th><th wid><img width='230' height='180' src='slike/".$r['slika']."'/></th>";
	 

}

if($start!=0){
 $nstart = $start - $pps;
 echo "<a href='serije.php?start=$nstart'>Prethodna starnica</a> ";
}

$zbir = $start + $pps;
echo "<strong>".$start." - ".$zbir."/".$br."</strong>";

if($start<($br-$pps)){
 $nstart = $start + $pps;
 echo " <a href='serije.php?start=$nstart'>Sledeca stranica</a>";
}

?>
</table>
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
