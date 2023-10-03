<?php

$db = new mysqli("localhost", "root", "", "gopa_db"); 

$username=$_POST['username'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$action=$_POST['action'];

    if ($action === "signup") {
        
$dubliccate = mysqli_query($db,"SELECT * FROM user WHERE email='$email'");
if((mysqli_num_rows($dubliccate)>0)){
    echo "<script>alert('Email already exist!')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
        $query = "INSERT INTO user (username,email,password) VALUES ('$username','$email','$password')";
        if ($db->query($query) === TRUE) {
            echo "<script>alert('Registration successful')</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "Error: " . $query . "<br>" . $db->error;
        }
    } elseif ($action === "signin") {
        $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $result = $db->query($query);

        if ($result->num_rows == 1) {
            $_SESSION['name'] = $name;
            header("Location: home.php");
        } else {
            echo "<script>alert('Invalid email or password')</script>.";
            echo "<script>window.location.href='index.php'</script>";
        }
    }

    $db->close();

?>

