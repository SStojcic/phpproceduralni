<?php
include 'php/functions.php';
include 'php/konekcija.php';



 session_start();

   if($_SESSION['user_id']){
	   
	   echo " <a href='admin.php' class='apanel''>Admin panel</a>&nbsp;&nbsp;&nbsp;&nbsp;";
		   echo "<a href='logout.php' class='apanel' >Izloguj se</a>";
	 
   }
	


if(isset($_POST['submit'])){
$username=$_POST['tbkorisnickoime'];
$password=$_POST['tbpassword'];




$alert='<div class="alert">

  <span class="closebtn">&times;</span> 
Uspesno ste se ulogovali '.$username.' !
</div>';
if(empty($username) && empty($password)){

$jok='<div class="alert warning">
  <span class="closebtn">&times;</span>  
  Morate popuniti polja!
</div>';


}
else{
	
$check_login=mysql_query("SELECT * FROM korisnici WHERE user='$username' AND pass='$password'");
if(mysql_num_rows($check_login)==1){
$run=mysql_fetch_array($check_login);
$user_id=$run['id'];
$ime=$run['user'];
$lozinka=$run['pass'];
$user_lvl=$run['user_level'];


 
if($user_lvl==1){
header('location:admin.php');
$_SESSION[user_id]=$user_id;

}
else{
echo  $alert;

	
}

}


else{
$nisu='<div class="alert warning">
  <span class="closebtn">&times;</span>  
  Username i password nisu ispravni!
</div>';

}



}


}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="StefanStojcic" content="author"/>
<meta name="description" content="Sajt o interesantnoj seriji."/>
		<meta name="keywords" content="Arrow, Serija, Gledanje, Preporuka, Harvey Spectr " />
		
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Arrow</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="kodovi/jquery-2.2.1.js"></script>

		<script type="text/javascript" src="kodovi/jQuery.js"></script>
		<script type="text/javascript" src="kodovi/javascripte.js"></script>
		<script type="text/javascript" src="kodovi/popup.js"></script>
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
<?php
echo $nisu;
echo $jok;
?>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
			<h1>ARROW</h1>
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
							  <div id="prikaz"></div>
							</form>
				    </div> 
					 
					
					 
				</ul>
				
			</div>
			 
		</div>
		<div id="banner">
			<div class="content">
			<img class="slajd" src="images/arrowslajd.jpg"  alt="" />
					<img  alt="SlikaSlajder" src="images/arrowslajd1.jpg" name="Slika"/>
					<img  alt="SlikaSlajder" src="images/arrowslajd2.jpg" name="Slika"/>
					<img  alt="SlikaSlajder" src="images/arrowslajd3.jpg" name="Slika"/>
				

</div>
				
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div class="post">
			<h2 class="title"><a>ARROW</a></h2>
			<div class="entry">
			<div id="search"></div>
				<p>Arrow je nova, moderna ekranizacija čuvenog DC stripa Green Arrow i emitovaće se na kalalu CW. Stephen Ammel će glumiti glavnu ulogu, a naravno kada je reč o superherojima to su obično dve uloge, po danu Oliver Kvin - multimilioner i noću Zelena Strela - junak koji se po uzoru na Robin Huda bori protiv nepravde.  </p>
			</div>
		</div>
	</div>
	<!-- end #page --> 
	<div id="featured-content">
	<h2>PREPORUKE</h2>
		<div id="column1">
			<p>Vikings</p>
			<p><img src="images/vikings_s2_ragnar_hero-AB.jpeg" width="300" height="150" alt="" /></p>
			<p>Sjajna avantura koja prati neverovatnog Ragnara Lotroka. Serija koja prati istoriju i njegove pustolovine.</p>
			<input type="button" id="btnShowSimple" value="Procitaj vise" />
			<div id="output"></div>
    
<div id="overlay" class="web_dialog_overlay"></div>
    
<div id="dialog" class="web_dialog">
   <table style="width: 100%; border: 0px;" cellpadding="3" cellspacing="0">
      <tr>
         <td class="web_dialog_title">	Vikings</td>
         <td class="web_dialog_title align_right">
            <a href="#" id="btnClose">Izadji</a>
         </td>
      </tr>
      
      <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td class="tek" colspan="2" style="padding-left: 15px;">
            Istorijska TV drama, epska priča o nasilnom svetu Vikinga i njihovim putovanjima...

Serija se fokusira na istorijsku ličnost uz koju se vezuju i mnoge legende, vikinškog vođu iz 9. veka, Ragnara Lodbroka. Njemu se pripisuju brojni pljačkaški pohodi po zapadnoj Evropi od kojih je najpoznatiji onaj iz 845. na Pariz. 

U seriji je prikazan kao mladi vikinški ratnik željan da otkrije nove obale i nove civilizacije preko okeana a glumi ga australijski glumac Trevis Fimel.

Serija je snimana u Irskoj i okupila je solidnu ekipu iza kamere. Kreator serije je Majkl Hirst, poznat po scenarijima za dva filma o engleskoj kraljici Elizabeti I, Elizabeth (1998) i Elizabeth: The Golden Age (2007), ali i kao tvorac serije The Tudors i producent serije The Borgias.


			
         </td>
      </tr>
      <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
      </tr>
     
   </table>
</div>
			
			
		</div>
		<div id="column2">
	<p>Lucifer</p>
			<p><img src="images/lucifer.jpg" width="300" height="150" alt="" /></p>
			<p>Serija Lucifer bazirana na Vertigo (DC Comics) karakterima, je napisana i producirana od strane Kapinosa. </p>
		<input type="button" id="btnShowSimple1" value="Procitaj vise" />
		<div id="output"></div>
    
<div id="overlay1" class="web_dialog_overlay"></div>
    
<div id="dialog1" class="web_dialog">
   <table style="width: 100%; border: 0px;" cellpadding="3" cellspacing="0">
      <tr>
         <td class="web_dialog_title">	Lucifer</td>
         <td class="web_dialog_title align_right">
            <a href="#" id="btnClose1">Izadji</a>
         </td>
      </tr>
      
      <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td class="tek1" colspan="2" style="padding-left: 15px;">
         Sotoni je dosadio tmuran život u paklu i dolazi da živi u Los Anđelesu da bi pomogao čovečanstvu oko problema. Svojim iskustvom i telepatskim sposobnostima pronalazi najdublje želje i misli u ljudima. Na sastanku sa devojkom u njegovom klubu, pucanje na njega i devojku ga navodi da postane konsultant policije Los Anđelesa i tako pokuša da kazni ljude za njihove zločine preko policije, zakona i pravde.


			
         </td>
      </tr>
      <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
      </tr>
     
   </table>
</div>
			
			
		</div>
		
		
		<div id="column3">
			<div class="PoljeCentarDole">
								<p></p>
								<div id="Login">
									<form method='post'>
							
										<p>Korisničko ime:</p>
										<input type="text" name='tbkorisnickoime' id="tbkorisnickoime" class="PoljeForma"/>
										<p>Šifra:</p>
										<input  type="password" name='tbpassword' id="tbpassword" class="PoljeForma" /></br>
										<a href='brb.html'><input type="submit" class="dugme" id="DugmeForma" name='submit' value="Prijavi se" /></a> </br>
										

									<p>Ukoliko niste registrovani, uradite to ovde</p>
									<p><a href="registracija.php">REGISTRACIJA!</a></p>
									</form>
								</div>
			
		</div>
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
</body>
</html>
