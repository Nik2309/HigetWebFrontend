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
$sql= "INSERT INTO `logininfo` ( `users`, `passs`) VALUES ('$username', '$passwords')";
$result = mysqli_query($con, $sql);
    
            if ($result) {
                header("Location: loginpage.html");
            }
}
?>