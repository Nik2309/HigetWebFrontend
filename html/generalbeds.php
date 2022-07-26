<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "gnralbed";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
function card($hospitalname,$noofbed,$location,$hospitalimg){
    $element = "
    
    <div class =\"box\">   
    
    <form action=\"pdetails.html\" method=\"post\">
        <button class=\"button\"type=\"submit\"></button>
    
        <img id=\"boximg1\"src=\"$hospitalimg\" height=\"85px\" width=\"85px\">
        <div class=\"text1\">$hospitalname</div>
        <div class=\"text2\">Avail Beds:$noofbed</div>
        <img id=\"boximg2\"src=\"images\location.png\"height=\"20px\" width=\"20px\">
        <div class=\"text3\" ><a id=\"loc\"href=\"$location\">$location
                                 </form></div></a>
</div>

";
    echo $element;
}

function card1($reviewerimg,$reviewername,$Date,$comment){
    $element = "
    
    <div class = \"box1\">
    <form action=\"\" method=\"post\">
        <button class=\"button\"type=\"submit\" ></button>
   
    <img id=\"boximga1\"src=\"$reviewerimg\" height=\"85px\" width=\"85px\">
    <div class=\"texta1\">$reviewername</div>
    <div class=\"texta2\">$Date</div>
    <img id=\"boximga2\"src=\"images\rate.png\" height=\"24px\" width=\"59px\">
    <div class=\"texta3\">$comment</form></div>
</div>

";
    echo $element;
}
?>
