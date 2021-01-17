  
<?php
include('conn.php');
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['messages'];

$query="INSERT INTO contact (name,email,subject,messages) "; 
$query.="VALUES('$name','$email','$subject','$message')";
$run = mysqli_query($db,$query);
if($run){
    echo 'Your message has been sent. Thank you!';
}