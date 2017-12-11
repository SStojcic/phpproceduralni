
	
	
	function pronadjiPodatke()
	{
		var xmlhttp = null;
		if(window.XMLHttpRequest)
		{
			xmlhttp = new XMLHttpRequest();
		}
		else
		{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		if(xmlhttp != null)
		{
			xmlhttp.open("GET", "advokati.xml", false);
			xmlhttp.send();
			
			xmlDoc = xmlhttp.responseXML;
			dohvati_podatke(xmlDoc);
		}
	}
	function LogInProvera()
{
	var ime=document.getElementById("tbkorisnickoime");
	var pass=document.getElementById("tbpassword");
	if((ime.value == "") || (pass.value == ""))
	{	
		alert("Morate popuniti polja!")
	}
	else
	{
		alert("Uspešno ste se pirjavili: " + ime.value+".");
	}
}
	function dohvati_podatke(xmlDoc)
	{
		var emailTP = document.getElementById('tbPretraga').value;
		
		var tagoviOsoba = xmlDoc.getElementsByTagName('advokat');
		
		for(var i = 0; i < tagoviOsoba.length; i++)
		{
			var ispis = "";
			
			var emailXML = tagoviOsoba[i].getElementsByTagName('ime')[0].childNodes[0].nodeValue;
			
			if(emailXML == emailTP)
			{
				var imePrezime = tagoviOsoba[i].getElementsByTagName('ime')[0].childNodes[0].nodeValue;
				
				var zanimanje = tagoviOsoba[i].getElementsByTagName('prezime')[0].childNodes[0].nodeValue;
				
				ispis += " "+ imePrezime + " " + zanimanje;
				
				document.getElementById('prikaz').innerHTML = ispis;
			}
		}
		
	}

var rb0=0;
var rb1=0;
var rb2=0;
var rb3=0;
var rb4=0;
var brAnekete=0;
function anketa(){
 brAnekete=1;
 var rbOceniti=document.getElementsByName('ocena');
 
 
 for(var i=0;i<rbOceniti.length;i++){
   if(rbOceniti[i].checked) {
	switch(rbOceniti[i].value){
		case '0':rb0++;break;
		case '1':rb1++;break;
		case '2':rb2++;break;
		case '3':rb3++;break;
		case '4':rb4++;break;
	}
   }
 }
 document.getElementById('rezultatAnkete').innerHTML="<table><tr><td>Ocena 1:</td><td> " + rb0 + "</td></tr><tr><td>Ocena 2: </td><td>" + rb1 +
 "</td></tr><tr><td>Ocena 3: </td> <td>" + rb2 + "</td></tr><tr><td>Ocena 4: </td><td>" + rb3 +"</td></tr><tr><td>Ocena 5: </td><td>" + rb4 +
 "</td></tr></table>";
 
}