<?php 
    
    session_start(); 

    $connection = mysqli_connect('localhost','root','','notes');
    
        $email = $_POST['email'];
        $fname= $_POST['fname'];
        $lname = $_POST['lname'];
        $phno = $_POST['phno'];
        $dob = $_POST['dob'];
        $uni = $_POST['university'];
        $degree = $_POST['degree'];
        $stream = $_POST['stream'];
        $year = $_POST['year'];
        $password = $_POST['password'];
        $repassword= $_POST['repassword'];

        $check="select email from userinfo where email='$email'";
        $res=mysqli_query($connection,$check);
        if(mysqli_num_rows($res)>=1){
            $message1="Account already exists with the entered mail ID. Please sign in to continue.";
            echo  "<script>
            window.location.href='login.html';
            alert('$message1');
            </script>";
        }
        else{
            $request = "insert into userinfo(email,fname,lname,phno, dob,university,degree,stream,year,password,confirmpassword) values('$email', '$fname','$lname','$phno','$dob', '$uni','$degree','$stream','$year','$password','$repassword')";
            mysqli_query($connection, $request);
            $message2="Created account successfully. Please verify your email address and login again to continue.";
            echo  "<script>
            window.location.href='login.html';
            alert('$message2');
            </script>";
            
        }


?>