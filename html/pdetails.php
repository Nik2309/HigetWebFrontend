<?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = 'password';
         $dbname = 'pdetails';
         $con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
         
         if($con->connect_errno ) {
            printf("Connect failed: %s<br />", $con->connect_error);
            exit();
         }
if ($_SERVER['REQUEST_METHOD']=='POST'){
$firstname = $_POST['first'];
$middlename = $_POST['middle'];
$lastname = $_POST['last'];
$age = $_POST['ag'];
$gender = $_POST['gndr'];
$bloodgrp= $_POST['blodgrp'];
$number = $_POST['numb'];
$buildno = $_POST['bldno'];
$flatno = $_POST['fltno'];
$appt = $_POST['apt'];
$landmark = $_POST['land'];
$street = $_POST['street'];
$city = $_POST['ct'];
$taluka = $_POST['tal'];
$district = $_POST['dist'];
$state = $_POST['stat'];
$zip = $_POST['zeep'];
$sql= "INSERT INTO `pdetailsinfo` (`firstnames`, `middlenames`,`lastnames`,`ages`,`genders`,`bloodgrps`,`numbers`,`buildnos`,`flatnos`,`apptartment`,`landmark`,`street`,`cities`,`talukas`,`districts`,`states`,`zips`) 
VALUES ('$firstname', '$middlename','$lastname','$age','$gender','$bloodgrp','$number','$buildno','$flatno','$appt','$landmark','$street','$city','$taluka','$district','$state','$zip')";
$result = mysqli_query($con,$sql);
    
            if ($result) {
                header("Location: prdetails.html");
            }
    
}
?>