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
<script type="text/javascript" src="kodovi/registracija.js"></script>
		
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
<?php 

   include 'php/konekcija.php';

   
   
?>

		

<body>
<?php echo $uspeh;?>
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
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div class="post1">
		<form action="<?php print $_SERVER['PHP_SELF'];?>" method="post">
						<fieldset>	
							<table>		
								<legend align="center">Podaci o korisniku</legend>
									<p><tr>
										<td class="naziv">Ime:</td>
										<td>
											<input type="text" class="text-box" name="tbIme" id="tbIme"  maxlength="30" placeholder=" Ime..." />
										</td>
										<td>
											<div id="greskaIme" name="greske"></div>
										</td>
									</tr>	
									<tr>
										<td class="naziv">Prezime:</td>
										<td>
											<input type="text" class="text-box" name="tbPrezime" id="tbPrezime" maxlength="30" placeholder=" Prezime..."  />
										</td>
										<td>
											<div id="greskaPrezime" name="greske"></div>
										</td>
									</tr>								
									<tr>
										<td class="naziv">Pol:</td>
										<td>
											<input type="radio" name="pol" id="muski" value="Muski"/>Muski<br/>
											<input type="radio" name="pol" id="zenski" value="Zenski"/>Ženski<br/>
										</td>
										<td><div id="grPol" name="greske"></div></td>
									</tr>
						
									<tr>
										<td class="naziv">Korisničko ime:</td>
										<td>
											<input type="text" class="text-box" id="tbKorisnickoIme" name="tbKorisnickoIme" title="Unesite korisničko ime" placeholder=" Korisničko ime..."  />
										</td>
										<td>
											<div id="greskaKorisnickoIme" name="greske"></div>
										</td>
									</tr>
									<tr>
										<td class="naziv">E-mail:</td>
										<td>
											<input type="text" class="text-box" id="tbEmail" name="tbEmail" maxlength="50" placeholder=" E-mail..." title="Unesite e-mail" />
										</td>
										<td>
											<div id="greskaEmail" name="greske"></div>
										</td>
									</tr>	
									<tr>
										<td class="naziv">Lozinka:</td>
										<td>
											<input type="password" name="tbLozinka" id="tbLozinka" class="text-box" maxlength="12" placeholder=" Lozinka..." title="Unesite najmanje 6 karaktera" />
										</td>
										<td>
											<div id="greskaLozinka" name="greske"></div>
										</td>
									</tr>
									<tr>
										<td class="naziv">Ponovite lozinku:</td>
										<td>
											<input type="password" class="text-box" id="tbLozinkaPonovo" name="tbLozinkaPonovo" maxlength="12" title="Unesite najmanje 6 karaktera" />
										</td >
										<td>
											<div id="greskaLozinkaPonovo" name="greske"></div>
										</td>
									</tr></p>
							</table>
						</fieldset>
							<table class="tdugme">
									<tr>
										<td><input type="submit" value="Prijavi" name="btnNaruci" class="dugme" /></td>
										<td><input type="reset"  value="Ponisti" class="dugme"  /></td>
									</tr>
							</table>
					</form>
					</br>
					<?php 

if(isset($_REQUEST['btnNaruci'])){
	
	$ime=$_REQUEST['tbIme'];
	$prezime=$_REQUEST['tbPrezime'];
	$korisnickoime=$_REQUEST['tbKorisnickoIme'];
	$mejl=$_REQUEST['tbEmail'];
	$lozinka=$_REQUEST['tbLozinka'];
	$lozinkaponovo=$_REQUEST['tbLozinkaPonovo'];
$uspeh='<div class="alert">

  <span class="closebtn">&times;</span> 
Uspesno ste se registrovali' .$korisnickoime.' !
</div>';
	
	$greske=array();
	$podaci=array();
	
	
	$regIme= "/^[A-Z]{1}[a-z]{2,20}$/";
	$regPrezime="/^[A-Z]{1}[a-z]{2,20}$/";
	$regKorIme="/^[A-Za-z0-9]{6,12}$/";
	$regMail="/^[\w]+[\w\d]*([\.-_]?[\w\d]+)*@([\w]+[\.]{1}){1}([\w]+[\.]{1})*[\w]{2,3}$/";
	$regLozinka="/^[A-Za-z\d]{6,12}$/";
				
				if(empty($ime)){
			   $greske[]="Morate uneti ime!";
		   }
        
    
	    else if(!preg_match($regIme,$ime))
		   {
	              $greske[]="Ime nije u dobrom formatu!";
                                }
       else  
      {
	$podaci[]="Ime".$ime;
           }
		  				if(empty($prezime)){
			   $greske[]="Morate uneti prezime!";
		   }
        
	else if(!preg_match($regPrezime,$prezime)){
	$greske[]="Prezime nije u dobrom formatu!";
}
else{
$podaci[]="Prezime".$prezime;
}
		if(empty($korisnickoime)){
			   $greske[]="Morate uneti korisnicko ime!";
		   }
  else if(!preg_match($regKorIme,$korisnickoime)){
	$greske[]="Korisnicko ime nije u dobrom formatu!";
}
else{
$podaci[]="Korisnicko ime".$korisnickoime;
}
  		if(empty($mejl)){
			   $greske[]="Morate uneti e-mail adresu!";
		   }
else if(!preg_match($regMail,$mejl)){
	$greske[]="Mejl nije u dobrom formatu!";
}
else{
$podaci[]="Mejl".$mejl;
}
 		if(empty($lozinka)){
			   $greske[]="Morate uneti  lozinku!!";
		   }
        else if(!preg_match($regLozinka,$lozinka)){
	$greske[]="Lozinka nije u dobrom formatu!";
}
else{
$podaci[]="lozinka".$lozinka;
}
       if(empty($lozinkaponovo)){
			   $greske[]="Morate potvrditi lozinku!!!";
		   }
       else if($lozinkaponovo!=$lozinka)
		{
	$greske[]="Lozinke se moraju poklapati!";
}
else{
$podaci[]="lozinkaponovo".$lozinkaponovo;
}	
				 
				 if(count($greske)!=0){
					 
		echo '<div class="alert danger"><ul>';
						 
						 foreach($greske as $g){
							 echo "<li>".$g."</li>";
						 }
						 echo   "<span class='closebtn'>&times;</span></ul></div>";
						 }

						 else
						 {
							echo $uspeh;
						mysql_query("INSERT INTO korisnici VALUES ('','$korisnickoime','$lozinka','2')");			 }
}

?> 
		</div>
	</div>
	<!-- end #page --> 
	
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
