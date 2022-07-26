
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'password';
$dbname = 'login';
$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($con->connect_errno ) {
   printf("Connect failed: %s<br />", $con->connect_error);
   exit();
}
if ($_SERVER['REQUEST_METHOD']=='POST'){
$username = $_POST['userss'];
$passwords = $_POST['pass'];
$sql= "SELECT * FROM logininfo WHERE users = '$username' AND passs = '$passwords' ";
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
    header("Location: homepage.html");
}else{
    header("Location: loginpage.html");
}
}
?>