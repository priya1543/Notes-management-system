<?php 
    
    session_start(); 

    $connection = mysqli_connect('localhost','root','','notes');
    
        $filename_custom = $_POST['filename'];
        $topic= $_POST['topic'];
        $notes = $_POST['notes'];
        $email=$_SESSION['email_user'];
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png","pdf" => "application/pdf", "docx" => "application/vnd.openxmlformats-officedocument.wordprocessingml.document", "doc" => "application/msword","txt" =>"text/plain");
        $filename = $_FILES["file"]["name"];
        $filetype = $_FILES["file"]["type"];
        $filesize = $_FILES["file"]["size"];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if(!array_key_exists($ext, $allowed)) 
                die("Error: Please select a valid file format.");

            $maxsize = 10 * 1024 * 1024;
            if($filesize > $maxsize)
                die("Error: File size is larger than the allowed limit.");

            if(in_array($filetype, $allowed)){
                if(file_exists("upload/" . $filename)){
                    echo $filename . " is already exists.";
                } else{
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], "uploadedfiles// $filename")){
     
                        $sql="INSERT INTO uploads(email,topic,notes,file,type,size) VALUES('$email','$topic','$notes','$filename','$filetype','$filesize')";
                         
                        mysqli_query($connection,$sql);
                        $message2="Your file is uploaded succesfully.";
                        echo  "<script>
                        window.location.href='upload.html';
                        alert('$message2');
                        </script>";
                        
                    }else{
     
                       echo "File is not uploaded";
                    }
                     
                } 
            } else{
                echo "Error: There was a problem uploading your file. Please try again."; 
            }
    ?>
