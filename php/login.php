<?php

if(isset($_POST['submit'])){
$username=$_POST['tbkorisnickoime'];
$password=$_POST['tbpassword'];

if(empty($username) && empty($password)){

echo 'morate popuniti polja!';


}
else{
$check_login=mysql_query("SELECT id,username,password,user_level FROM korisnici WHERE user='$username' AND password='$password'");
if(mysql_num_rows($check_login)==1){
$run=mysql_fetch_array($check_login);
$user_id=$run['id'];
$ime=$run['username'];
$lozinka=$run['password'];
$user_lvl=$run['user_level'];

if($user_lvl==1){
header('location:admin.php');
}
else{
header('location:user.php');
}

}
else{
echo 'username i password nisu ispravni!';
}



}


}
?>