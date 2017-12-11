var podaci = new Array();
var greska = 0;
var slika = "images/clipart-ftbutton-ok-33af.png";

function ProveraIme()
{		
		var Ime = document.getElementById("tbIme").value;
		var reIme = /^[A-Z]{1}[a-z]{2,20}$/;
		
		if(Ime == "")
		{
			document.getElementById('tbIme').style.border="1px solid red";
			document.getElementById('greskaIme').innerHTML = "Popunite polje!";	
			greska+=1;
		}
		
		else
		{
			if(!reIme.test(Ime))
			{
				document.getElementById('tbIme').style.border="1px solid red";
				document.getElementById('greskaIme').innerHTML = "Ime nije uneto u dobrom formatu.";	
				greska+=1;
			}
			else
			{
				document.getElementById('tbIme').style.border="1px solid green";
				document.getElementById('greskaIme').innerHTML ="<img src= " + slika + " width='20px' height='20px'/>";
				podaci.push(Ime);
				greska=0;
			}
		}	
}

function ProveraPrezime()
{
		var Prezime = document.getElementById("tbPrezime").value;
		var rePrezime = /^[A-Z]{1}[a-z]{2,20}$/;
		if(Prezime == "")
		{
			document.getElementById('tbPrezime').style.border="1px solid red";
			document.getElementById('greskaPrezime').innerHTML = "Popunite polje!";	
			greska+=1;
		}
		
		else
		{
			if(!rePrezime.test(Prezime))
			{
				document.getElementById("tbPrezime").style.border="1px solid red";
				document.getElementById("greskaPrezime").innerHTML = "Prezime nije uneto u dobrom formatu";
				greska+=1;
			}
			else
			{
				document.getElementById("tbPrezime").style.border="1px solid green";
				document.getElementById('greskaPrezime').innerHTML ="<img src= " + slika + " width='20px' height='20px'/>";
				podaci.push(Prezime);
				greska=0;
			}
		}
}

function ProveraKorisnickoIme()
{
		var KorisnickoIme = document.getElementById("tbKorisnickoIme").value;
		var reKorisnickoIme = /^[A-Za-z0-9]{6,12}$/;
		if(KorisnickoIme == "")
		{
			document.getElementById('tbKorisnickoIme').style.border="1px solid red";
			document.getElementById('greskaKorisnickoIme').innerHTML = "Popunite polje!";	
			greska+=1;
		}
		
		else
		{
			if(!reKorisnickoIme.test(KorisnickoIme))
			{
				document.getElementById("tbKorisnickoIme").style.border="1px solid red";
				document.getElementById("greskaKorisnickoIme").innerHTML = "Korisnicko ime nije uneto u dobrom formatu";
				greska+=1;
			}
			else
			{
				document.getElementById("tbKorisnickoIme").style.border="1px solid green";
				document.getElementById('greskaKorisnickoIme').innerHTML ="<img src= " + slika + " width='20px' height='20px'/>";
				podaci.push(KorisnickoIme);
				greska=0;
			}
		}
}

function ProveraEmail()
{
		var Email = document.getElementById("tbEmail").value;
		var reEmail =  /^[\w]+[\w\d]*([\.-_]?[\w\d]+)*@([\w]+[\.]{1}){1}([\w]+[\.]{1})*[\w]{2,3}$/;
		if(Email == "")
		{
			document.getElementById('tbEmail').style.border="1px solid red";
			document.getElementById('greskaEmail').innerHTML = "Popunite polje!";	
			greska+=1;
		}
		
		else
		{
			if(!reEmail.test(Email))
			{
				document.getElementById("tbEmail").style.border="1px solid red";
				document.getElementById("greskaEmail").innerHTML = "Email nije uneto u dobrom formatu";
				greska+=1;
			}
			else
			{
				document.getElementById("tbEmail").style.border="1px solid green";
				document.getElementById('greskaEmail').innerHTML ="<img src= " + slika + " width='20px' height='20px'/>";
				podaci.push(Email);
				greska=0;
			}
		}
}

function ProveraLozinka()
{
		var Lozinka = document.getElementById("tbLozinka").value;
		var reLozinka = /^[A-Za-z\d]{6,12}$/;
		if (Lozinka == "")
		{
			document.getElementById('tbLozinka').style.border="1px solid red";
			document.getElementById('greskaLozinka').innerHTML = "Popunite polje!";	
			greska+=1;
		}
		else
		{
			if(!reLozinka.test(Lozinka))
			{
				document.getElementById("tbLozinka").style.border="1px solid red";
				document.getElementById("greskaLozinka").innerHTML = "Lozinka mora sadrzati bar 6 karaktera";
				greska+=1;
			}
			else
			{
				document.getElementById("tbLozinka").style.border="1px solid green";
				document.getElementById('greskaLozinka').innerHTML ="<img src= " + slika + " width='20px' height='20px'/>";
				podaci.push(Lozinka);
				greska=0;
			}
		}
}

function ProveraLozinkaPonovo()
{
		var LozinkaPonovo = document.getElementById("tbLozinkaPonovo").value;
		var Lozinka = document.getElementById("tbLozinka").value;
		if (LozinkaPonovo == "")
		{
			document.getElementById('tbLozinkaPonovo').style.border="1px solid red";
			document.getElementById('greskaPonovo').innerHTML = "Popunite polje!";	
			greska+=1;
		}
		
		else
		{
			if(LozinkaPonovo != Lozinka)
			{
				document.getElementById("tbLozinkaPonovo").style.border="1px solid red";
				document.getElementById("greskaLozinkaPonovo").innerHTML = "Ovo polje mora imati isti sadrzaj kao polje lozinka";
				greska+=1;
			}
			else
			{
				document.getElementById("tbLozinkaPonovo").style.border="1px solid green";
				document.getElementById('greskaLozinkaPonovo').innerHTML ="<img src= " + slika + " width='20px' height='20px'/>";
				podaci.push(LozinkaPonovo);
				greska=0;
			}
		}
}


function Prijavi()
{
		var Ime = document.getElementById("tbIme").value;
		var Prezime = document.getElementById("tbPrezime").value;
		var KorisnickoIme = document.getElementById("tbKorisnickoIme").value;
		var Email = document.getElementById("tbEmail").value;
		var Lozinka = document.getElementById("tbLozinka").value;
		var LozinkaPonovo = document.getElementById("tbLozinkaPonovo").value;
		
		if((greska != 0) || (Ime== "") || (Prezime == "") || (KorisnickoIme == "") || (Lozinka == "") || (LozinkaPonovo == ""))
		{
			alert("Forma za registraciju nije pravilno popunjena!!!");
		}
	
		else
		{	
			alert("Uspesno ste se registrovali.");
			document.getElementById("prikaz").innerHTML="Korisnik: </br> Ime: " + Ime + "</br> Korisnicko ime: " + KorisnickoIme + 
			"</br> Email: " + Email;
		}
}

function Ponisti()
{
		document.getElementById('tbIme').style.border="1px solid #ccc";
		document.getElementById('greskaIme').innerHTML="";
		document.getElementById('tbPrezime').style.border="1px solid #ccc";
		document.getElementById('greskaPrezime').innerHTML="";
		document.getElementById('tbEmail').style.border="1px solid #ccc";
		document.getElementById('greskaEmail').innerHTML="";
		document.getElementById('tbKorisnickoIme').style.border="1px solid #ccc";
		document.getElementById('greskaKorisnickoIme').innerHTML="";
		document.getElementById('tbLozinka').style.border="1px solid #ccc";
		document.getElementById('greskaLozinka').innerHTML="";
		document.getElementById('tbLozinkaPonovo').style.border="1px solid #ccc";
		document.getElementById('greskaLozinkaPonovo').innerHTML="";
}
