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
</style>
</head>
<body>
   
<!-- header section starts  -->

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
</div>
<div class="dashboard">
<div id="home">
    <div id="dash-about">
        <h3>Dashboard</h3>
        <button type="submit"> <a href="favourites.php"> Favorites</a> </button><br>
        <button type="submit"> <a href="Bookmarks.php"> Bookmarks </a></button><br>
        <button type="submit"> <a href="uploads_list.php"> Upload </a></button><br>
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