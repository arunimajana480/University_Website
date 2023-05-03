<?php
$name=$_POST['name'];
$visitors_email=$_POST['email'];
$comment=$_POST['comment'];


$email_from='arunimajana112.in@gamil.com';

$email_subject='New Form Submission';

$email_body="User Name: $name.\n".
            "User Email: $visitor_email.\n".
           
            "User Message: $comment.\n";

$to='arunimajana690@gamil.com';

$headers= "From: $email_from\r\n";

$headers.="Reply To: $visitors_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: blog.html");

?>