<?php
include 'connect.php';
include 'php/functions.php';

 session_start();

   if(!$_SESSION['user_id']){
	   
	   header("location: index.php");
   }
	 else{  
	      echo " <a href='admin.php' class='apanel'>Admin panel</a>&nbsp;&nbsp;&nbsp;&nbsp;";
		   echo "<a href='logout.php' class='apanel'>Izloguj se</a>";
	 

	 
   }

if(isset($_REQUEST['unesi'])){
	$serija=$_REQUEST['serija'];
	$opis=$_REQUEST['opis'];
	$imeFajla = $_FILES['slika']['name'];
	$privremenoImeFajla = $_FILES['slika']['tmp_name'];
	 $folder = 'slike/';
	$putanjaSlike = $folder.$imeFajla;
	
  
$reNaziv="/^[A-Z][a-z]+$/";
		$putanja="slike/";
		$greske=array();
		if(!preg_match($reNaziv,$serija)){
			$greske[]="Greska naziv!";
		}
		
	 
		
	 if(count($greske)==0){		
	 if(move_uploaded_file($privremenoImeFajla,$putanjaSlike)){
$uspeh='<div class="alert">
  <span class="closebtn">&times;</span>  
  Uspesno ste upisali sliku!
</div>';

	}else{
		 $nisu='<div class="alert warning">
  <span class="closebtn">&times;</span>  
  Niste upisali sliku!
</div>';
		break;
		      
	}
					
			mysql_query("INSERT INTO serije VALUES('','$serija','$opis','$imeFajla')");
			$uspeh='<div class="alert">
  <span class="closebtn">&times;</span>  
  Uspesno ste upisali seriju!!
</div>';
		}
	
		else{
			$nisu='<div class="alert warning">
  <span class="closebtn">&times;</span>  
  Niste upisali seriju!
</div>';
			
		}
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
<?php
echo $nisu;
echo $uspeh;
?>
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
	
		
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div class="post1">
		<ul id="meni">
		<ul>
									<li class="manja"><a href="admin.php">Brisanje korisnika</a></li>
									<li class="manja"><a href="admin_brisanje.php">Brisanje sadrzaja</a></li>
		</ul>
<table border='1' align='center'>

<form method='post' enctype='multipart/form-data'  >
<input type='hidden' name='MAX_FILE_SIZE' value="400481">
<tr><td>Naziv serije:</td><td><input type='text' name='serija'></td>
<tr><td>Opis:</td><td><textarea  rows='10' name='opis'></textarea></td>
<tr><td>Slika:</td><td><input  type='file' name='slika'></td>
<tr><td colspan='2' align='center' ><input class="dugme" type='submit'value='unesi' name='unesi'></td></tr>
</form>
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
<script type="text/javascript">

   
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}

</script>
<!-- end #footer -->
</body>
</html>
