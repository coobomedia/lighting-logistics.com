<?php
include_once './lib.php';


if(!isPostBack()) die('Please send contact form via POST method...');

$contactEmail = isset($_POST['emailTo'])?$_POST['emailTo']:'';
$Name = htmlspecialchars(isset($_POST['txtName'])?$_POST['txtName']:'');
$Email = htmlspecialchars(isset($_POST['txtEmail'])?$_POST['txtEmail']:'');
$Subject = htmlspecialchars(isset($_POST['txtSubject'])?$_POST['txtSubject']:'Contact us');
$preText = "<strong>Sender Name:</strong> $Name <br />";
$preText .= "<strong>Sender Email:</strong> $Email <br />";
$preText .= "<strong>Subject:</strong> $Subject <br /><br />";
$Text = htmlspecialchars($_POST['txtText']);

$Text = $preText . $Text;


if(empty ($Text)) die(__('Text could not be empty...','WEBNUS_TEXT_DOMAIN'));
if(!checkEmailAddress($Email)) die(__('Invalid email address...','WEBNUS_TEXT_DOMAIN'));

if(!sendmail::send($Email , $contactEmail , $Text , $Subject ))
   die('Could not send message. failed to connect to mailserver.');
   
echo '1';
?>