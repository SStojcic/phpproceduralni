<?php
include 'connect.php';
include 'functions.php';

$u_id=$_GET['u_id'];

mysql_query("DELETE FROM serije WHERE id_serije='$u_id'");
header('location:admin_brisanje.php');



?>