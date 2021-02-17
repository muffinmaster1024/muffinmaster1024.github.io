    <?php

$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];

$message = stripslashes($message);

$sendTo = "manuel.fendler@web.de";
$subject = "RIEGEL";

$msg_body = "Name: $name\n";
$msg_body .= "E-Mail: $email\n";
$msg_body .= "Comments: $message\n";

$header_info = "From: ".$name." <".$email.">";

mail($sendTo, $subject, $msg_body, $header_info);

?>