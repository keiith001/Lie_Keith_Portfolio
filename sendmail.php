<?php

require_once('includes/connect.php');

///gather the form content
$fname = $_POST['full_name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$errors = [];

//validate and clean these values

$fname = trim($fname);
$email = trim($email);
$msg = trim($msg);

if(empty($fname)) {
    $errors['full_name'] = 'Please fill in your Full Name';
}

if(empty($msg)) {
    $errors['msg'] = 'Please write a message anything you want.';
}

if(empty($email)) {
    $errors['email'] = 'Please fill in your Email';
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'Please provide a valid Email';
}

if(empty($errors)) {

    //insert these values as a new row in the contacts table

    $query = "INSERT INTO contacts (full_name, email, msg) VALUES('$fname','$email','$msg')";

    if(mysqli_query($connect, $query)) {


// Send Information to Email
$to = 'kith.richrd@gmail.com';
$subject = 'You got new message from your Portfolio Site!';

$message = "You have received a new message:\n\n";
$message .= "Name: ".$fname."\n";
$message .= "Email: ".$email."\n\n";

mail($to,$subject,$message);

header('Location: thank_you.php');

}else{
    for($i=0; $i < count($errors); $i++) {
        echo $errors[$i].'<br>';
    }
}

}


?>