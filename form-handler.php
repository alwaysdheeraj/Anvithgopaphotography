 <?php
 $name = $_POST['name'];
 $visitor_email= $POST['email'];
 $service = $_POST['service'];
 $message = $_POST['message'];
 
 $email_from ='hdheeraaj8@gmail.com';

 $email_subject='New Form Submission';

 $email_body="User Name:$name.\n".
            "User Email:$visitor_email.\n".
            "Required service:$subject.\n".
            "User Message:$message.\n".        

$to='anvithgopa@gmail.com';

$headers ="From: $email_from \r\n";

$headers .="Reply-to: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
