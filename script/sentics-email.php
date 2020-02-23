	<?php
//receive form data
	$text = $_POST['text_input'];
	$strokeA = $_POST['stroke_A'];
	$strokeB = $_POST['stroke_B'];
	$strokeC = $_POST['stroke_C'];
	$strokeD = $_POST['stroke_D'];

//compose email

	$email_from = 'mattescreen00@gmail.com';

	$email_subject = "SENTICS_input";

	$email_body = "$text $strokeA $strokeB $strokeC $strokeD"

//send email---------------->


  $to = "mattescreen00@gmail.com";

  mail($to,$email_subject,$email_body);


//check for spam---------------->

function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
?>
