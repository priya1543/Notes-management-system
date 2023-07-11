<?php 
    
    session_start(); 
    $connection = mysqli_connect('localhost','root','','notes');
    
        $name = $_POST['name'];
        $email= $_POST['email'];
        $contact = $_POST['contact'];
        $year = $_POST['year'];
        $accessibility= $_POST['accessibility'];
        $features = $_POST['features'];
        $quality = $_POST['quality'];
        $suggest = $_POST['suggest'];

            $request = "insert into feedback(name,email,contact,year, accessibility,features,quality,suggest) values( '$name','$email', '$contact','$year','$accessibility','$features', '$quality','$suggest')";
            mysqli_query($connection, $request);
            $message2="Feedback submitted successfully.";
            echo  "<script>
            window.location.href='confirmation.html';
            alert('$message2');
            </script>";

?>