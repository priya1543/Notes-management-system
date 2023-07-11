<?php 
    session_start(); 
    unset($_SESSION['email_user']);
    $message2="Account logged out successfully.";
    echo  "<script>
            window.location.href='login.html';
            alert('$message2');
            </script>";
?>
























