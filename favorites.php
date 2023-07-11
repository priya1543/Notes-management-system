<?php
$fileID = htmlentities($_GET['fileID']);
$conn = mysqli_connect('localhost','root','','notes');
$fileID = mysqli_real_escape_string($conn, $fileID); // ALWAYS ESCAPE USER INPUT
$query = "SELECT * FROM uploads where id=$fileID";
$result = mysqli_query($conn, $query);
$result_check = mysqli_num_rows($result);
if($result_check > 1 || $result_check < 1){ //If more then 1 result die
    die('inavlid ID');
}
$row = mysqli_fetch_assoc($result);
$id=$row['id'];
$email=$row['email'];
$topic=$row['topic'];
$notes=$row['notes'];
$file=$row['file'];
$check="select * from favourites where id='$id'";
$res=mysqli_query($conn,$check);
if(mysqli_num_rows($res)==1){
    $message2="File already exist in favourites list.";
    echo  "<script>
                window.location.href='favourites.php';
                alert('$message2');
                </script>";
}
else{
$request = "insert into favourites(id,email,topic,notes, filename) values('$id','$email', '$topic','$notes','$file')";
mysqli_query($conn, $request);
$message2="File successfully added to favourites.";
echo  "<script>
            window.location.href='favourites.php';
            alert('$message2');
            </script>";
}
?>