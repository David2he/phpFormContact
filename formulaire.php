<?php 

error_reporting(E_ALL); 
ini_set('display_errors', 1); 

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $subject = $_POST['subect'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo ="snoupy777@gmail.com";
    $headers = "From: It works".$mailFrom;
    $txt ="Tu as recu un email de".$name.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
    echo 'pdd';
}
