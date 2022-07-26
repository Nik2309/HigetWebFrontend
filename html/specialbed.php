<?php
include('specialbeds.php');
$sql = "SELECT * FROM specialbedinfo";
$result = $con->query($sql);
$sql1 = "SELECT * FROM specialbedreview";
$result1 = $con->query($sql1);
?>

<html>
    <head><title>Hi-get</title>
    <meta name="author" content="Nikhil Chapadia">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="specialbed.css">
    </head>
    <body>
        <div id="container">
            <ul>
                <li class="line"><a id="home"href = "homepage.html">Home</a></li>
                <li class="line" id="line1">
                    <div class="dropdown">
                        <button id="service">Services</button>
                        <div class="dropdown-content">
                        <a href="generalbed.php">General Bed Booking</a>
                        <a href="semibed.php">Semi-Special Bed Booking</a>
                        <a href="specialbed.php">Special Bed Booking</a>
                        <a href="icu.php">ICU Booking</a>
                        <a href="vent.php">Ventilator Booking</a><br>
                        <a href="">Oxygen</a><br>
                        <a href="">NearBy Blood Bank</a>
                        <a href="pdetails.html">Appointment</a>
                        </div>
                      </div>
                </li>
                <li class="line" id="line2">About</li>
                <li class="line" id="line3">Contact Us</li>
                <li><button id="search"type="serach" >Serach</button></li>
            </ul>
        </div>
     
<div class="column">
<?php
                while ($row = mysqli_fetch_assoc($result)){
                    card($row['hospitalnames'], $row['numberofbeds'], $row['address'], $row['hospitalimgs']);
                }
                while ($row = mysqli_fetch_assoc($result1)){
                    card1($row['reviewersimgs'], $row['reviewernames'], $row['dates'], $row['comments']);
                }
            ?>
</div>





<div id="head"> Special Bed Booking</div>
<img id="sortimg"src="images\sort.png"height="30px" width="30px"><span id="sort">Sort</span>
<img id="sortimg1"src="images\sort.png"height="30px" width="30px"><span id="sort1">Sort</span>
<img id="filterimg"src="images\filter.png"height="30px" width="30px"><span id="filter">Filter</span>
<img id="img"src="images\buildind.png" height="490px" width="730px">

</body></html>