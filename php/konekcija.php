<?php
	$kon=mysql_connect("localhost","root","");
	$baza=mysql_select_db("sajt",$kon);
	
	if(!$kon){
		echo "Greska pri vezi sa serverom!";
	}
	if(!$baza){
		echo "Greska pri vezi sa bazom!";
	}
?>