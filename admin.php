<?php
include 'php/functions.php';
include 'connect.php';
	   include 'php/konekcija.php';
	  
		   
		   
   session_start();

   if(!$_SESSION['user_id']){
	   
	   header("location: index.php");
   }
	 else{  
	      echo " <a href='admin.php' class='apanel'>Admin panel</a>&nbsp;&nbsp;&nbsp;&nbsp;";
		   echo "<a href='logout.php' class='apanel'>Izloguj se</a>";
	 

	 
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
						    
						
						
					
						<input type="text" name='user' id="tbPretraga" onkeyup="dohvatiSerije(this.value);" />
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
		<ul id="meni">
		<ul>
									<li class="manja"><a href="admin_unos.php">Dodavanje sadrzaja</a></li>
									<li class="manja"><a href="admin_brisanje.php">Brisanje sadrzaja</a></li>
		</ul>

		 <?php
		   $upit='SELECT * FROM korisnici WHERE user_level=2';
		   $rez=mysql_query($upit);
$rez=mysql_query($upit);

		   if(mysql_num_rows($rez)==0){
			   
			   echo 'nema podataka u bazi';
		   }
		   else {
		   echo "
		  
		   <table width='600' height='500' border='5' align='center'>
		   <caption>Brisanje korisnika</caption>
		   <tr align='center'> 
		   <th align='center'>RB</th>
		   <th>Username</th>
		   <th>Password</th>
		   <th>Obrisi</th>
		   </tr>";
		   
		   $i=1;
		   
		   while($r=mysql_fetch_array($rez))
		   {
			   $u_id=$r['id'];
		echo "	   <tr align='center'>
		   <td>$i</td>
		   <td>".$r['user']."</td>
		   <td>".$r['pass']."</td>
		   <td><a href='brisanje.php?u_id=$u_id'>Obrisi</a></td>
		   </tr>"; 
			   
			$i++;   
			   
		   }
		  echo"

		   <td>Dodaj</td>
		   <form method='post'>
		   <td><input type='text' name='username'</td>
		   <td><input type='password' name='password'</td>
  <td><input class='dugme' type='submit' name='dodaj' value='dodaj'</td>
		   </tr>
		   </table>";  
		   
		    if(isset($_POST['dodaj'])){
$username=$_POST['username'];
$password=$_POST['password'];



if(empty($username) & empty($password)){




}
else{
		   mysql_query("INSERT INTO korisnici VALUES('','$username','$password','2')");
		   }
	   }
		   }
		   ?>
	
		
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
