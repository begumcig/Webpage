<html>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')  
{
$name = (isset($_POST['name']) ? $_POST['name'] : null);
$email =(isset($_POST['mail']) ? $_POST['mail'] : null);
$reason = (isset($_POST['reason']) ? $_POST['reason'] : null);
$comment = (isset($_POST['comment']) ? $_POST['comment'] : null);
$formcontent=" From: $name \n Reason: $reason \n Comment: $comment";
$recipient = "begumcig@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";

}


?>


</body>
</html>