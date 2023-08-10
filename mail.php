<?php
//get data from form  
$name = $_POST['name'];
$lname = $_POST['lname'];
$number= $_POST['mobile'];
$email= $_POST['email'];

$to = "divesh.chand1996@gmail.com";

$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  lname = " . $lname . "\r\n  mobile number = " . $number . "\r\n Email =" . $email;
$headers = "From: noreply@yourexpertz.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:Thankyou.html");
?>