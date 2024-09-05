<?php
include 'database.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $feedback=$_POST['feedback'];
    $sql="insert into feedback(name,email,feedback) values('$name','$email','$feedback')";
    if(mysqli_query($con,$sql)){
        echo "<script> alert('Thank you for your valuable Feedback.') </script>";
    }
    else
     echo "error".mysqli_error($con);
    mysqli_close($con);
}
?>