<?php
session_start();
require_once "pdo.php";
$connection = mysqli_connect('localhost','root','','notes');
if (!isset($_SESSION['email_user'])) {
    die('Not logged in');
}
$email_temp=$_SESSION["email_user"];
$stmt = $pdo->prepare("SELECT * FROM userinfo where email = :email" );
$stmt->execute(array(":email" => $_SESSION['email_user']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row === false) {
    $_SESSION['error'] = 'Bad value for user_id';
    header('Location: signup.html');
    return;
}
?>
<!DOCTYPE html>
<html>
<head> 
<title> Notefy Sign up </title>
<style>
    body{
        margin: 0px;
    text-align: center;
    background-color:#e5faff;
    }
    .margin-page{
        margin-bottom: 100px;
        margin-top: 100px;
    }
    td{
        padding:10px;
    }
    table{
        background-color: white;
        box-shadow: 1px 3px 8px black;
    }
    input{
        width: 400px;
        height:30px;
    }
</style>
<link rel="stylesheet" href="styles.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
</head>
<body>
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
<div class="margin-page">
<div class="profile">
    <div class="profile-title">
        <h1 class="title">Profile Info</h1>
    </div>
    <div class="profile-content">
        <table align="center" border="0" style="width:70%">
            <tr>
                <td> Name: </td>
                <td><?php echo $row['fname']." ".$row['lname'] ?> </td> 
            </tr> 
            <tr> 
                <td>Email:</td>
                <td> <?php echo $row['email'] ?></td>
            </tr>
            <tr>
                <td>Phone No:</td> 
                <td><?php echo $row['phno'] ?> </td>
            </tr>
            <tr> 
                <td>Date of Birth:</td>
                <td><?php echo $row['dob'] ?></td>
            </tr>
            <tr>
                <td>University</td>
                <td>
                    <?php echo $row['university'] ?>
                </td>
            </tr>
            <tr> 
                <td>Degree:</td>
                <td> <?php echo $row['degree'] ?> </td>
            </tr> 
            <tr>
                <td>Stream:</td>
                <td> <?php echo $row['stream'] ?> </td>
            </tr>
        </table>
        <div class="btn" style="margin: 4rem 20rem 1rem 41rem;">
                <button type="submit" id="signup_btn" name="signup_btn" style="width:10rem;"><a href="editprofile.php"> Edit profile</a></button>
        </div>
    </div>
</div>
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
</body>
</html>

