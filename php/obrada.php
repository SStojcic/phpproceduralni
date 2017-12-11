<?php 

if(isset($_REQUEST['btnNaruci'])){
	
	$ime=$_REQUEST['tbIme'];
	$prezime=$_REQUEST['tbPrezime'];
	$korisnickoime=$_REQUEST['tbKorisnickoIme'];
	$mejl=$_REQUEST['tbEmail'];
	$lozinka=$_REQUEST['tbLozinka'];
	$lozinkaponovo=$_REQUEST['tbLozinkaPonovo'];

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
					 
		echo "<ul>";
						 
						 foreach($greske as $g){
							 echo "<li>".$g."</li>";
						 }
						 echo "</ul>";
						 }
						 else
						 {
							
						mysql_query("INSERT INTO korisnici VALUES ('','$korisnickoime','$lozinka,'')");			 }
}

?>