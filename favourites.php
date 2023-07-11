<?php
session_start();

require_once "pdo.php";


if (!isset($_SESSION['email_user'])) {
    die('Not logged in');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Notefy</title>
   <link rel="stylesheet" href="styles.css">
   <link href='https://fonts.googleapis.com/css?family=Merriweather:300italic' rel='stylesheet' type='text/css'>
   <style>
    body{
        margin: 0px;
    text-align: center;
    }
    .search-bar{
        margin-top:100px;
        margin-bottom:100px;
    }
    input{
        margin:2rem 0 0 0;
    }
    td{
       padding:0rem 2rem 0rem 2rem;
    }
    .btn{
        margin:1rem 5rem 1rem 2rem;
    }
    table{
        background-color:white;
        box-shadow: 2px 3px 8px black;
        margin:0px 100px 0px 180px;
    }
    h2{
        margin-top:50px;
    }
    .fav{
        padding-top:100px;
        padding-bottom:100px;
    }
</style>
</head>
<body>
   
<!-- header section starts  -->
<section>
<div class="dashboard">
<div class="nav">

   <!--<a href="homepage.html" class="logo">travel.</a>-->
   <nav class="navBar">
      <a href="dashboard.php" class="nav-item">Dashboard</a>
      <a href="profile.php" class="nav-item">Profile Page</a>
      <a href="search.php" class="nav-item">Search</a>
      <a href="upload.html" class="nav-item">Upload</a>
      <a href="feedbacks.php" class="nav-item">Feedback</a>
      <a href="logout.php" class="nav-item">Log-out</a>
   </nav>
</section>

<h2> Favourites</h2>
<div class="fav">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "notes";
$conn = new mysqli($servername, $username, $password, $db);
$email_temp=$_SESSION["email_user"];
if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
$sql = "select * from favourites where email='$email_temp'";

$result = $conn->query($sql);


if ($result->num_rows > 0){
    echo "<table>"; 
    while($row = $result->fetch_assoc()){     
        echo "<tr>";
        echo "<td>";
        echo $row["topic"];
        echo "</td>";
        echo "<td>";
        echo $row["notes"];
        echo "</td>";
        echo "<td>";
        echo $row["filename"];
        echo "</td>";
        echo "<td>";
        echo "<div class='btn'>";
        echo "<button onclick='window.open(\"download.php?fileID=".$row['id']."\");'>Download</button><br>";
        echo "</div>";
        echo "</td>";    
        echo "</tr>";
    }
    echo "</table>";
} else {
	echo "No records found.";
}
$conn->close();
?>
</div>
<!-- footer section starts  -->

<footer class="contact" id="contact">

    <div class="brand-details">
        <h3 class="brand-name">Notefy.</h3>
        <p class="detail">We aim at giving notes for all from everywhere.</p>
    </div>
    <div class="contact-details">
        <h3 class="contact-title">Contact</h3>
        <p><i class="fa fa-address-card"></i>: Chennai, Tamil Nadu, India</p>
        <p><i class="fa fa-phone"></i>: +91-9955220015</p>
        <p><i class="fa fa-phone"></i>: +91-8945740254</p>
        <p><i class="fa fa-envelope"></i>: notefygmail.com</p>
    </div>
    <div class="link-details">
        <h3 class="link-title">Links</h3>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="profile.php">Profile Page</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="upload.html">Upload</a></li>
            <li><a href="feedbacks.php">Feedback</a></li>
        </ul>
    </div>

</footer>

<!-- footer section ends -->

</div>
</body>
</html>