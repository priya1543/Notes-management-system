<?php   
    session_start(); 
    $connection = mysqli_connect('localhost','root','','notes');
    $email = $_POST['email'];
    $pass= $_POST['password'];
    $checkemail="select email from userinfo where email='$email'";
    $checkpassword="select password from userinfo where email='$email' and password='$pass'";
    $res1=mysqli_query($connection,$checkemail);
    $res2=mysqli_query($connection,$checkpassword);
    echo mysqli_num_rows($res2);
    if(mysqli_num_rows($res1)<1){
        $message1="Account doesnot exist with the entered email ID. Please sign up to continue.";
        echo "<script>
        window.location.href='signup.html';
        alert('$message1');
        </script>";
    }
    if(mysqli_num_rows($res2)==1){
            $_SESSION["email_user"]=$email;
            $message2="Logged in successfully.";
            echo "<script>
            window.location.href='dashboard.php';
            alert('$message2');
            </script>";      

    }

?>