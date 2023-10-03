<?php
$name=$_POST['from_name'];
$email=$_POST['to_name'];
$number=$_POST['email_id'];
$service=$_POST['message'];


$servername="localhost";
$username="root";
$password="";
$db_name="gopa_db";

$conn= new mysqli($servername,$username,$password,$db_name);

if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}

$contactfeed="INSERT INTO contact (name,email,number,service)
VALUES('$name','$email','$number','$service')";

if($conn->query($contactfeed)===TRUE){
    echo "<script>alert('Thank You! We will get back to you soon')</script>";
    echo "<script>window.location.href='contact.php';</script>";
}
else{
    echo "Error" .$contactfeed."<br> .$conn->error";

}
$conn->close();


?>