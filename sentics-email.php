	<?php
//receive form data
	$text = htmlspecialchars($_POST['text_input']);
	$strokeA = htmlspecialchars($_POST['stroke_A']);
	$strokeB = htmlspecialchars($_POST['stroke_B']);
	$strokeC = htmlspecialchars($_POST['stroke_C']);
	$strokeD = htmlspecialchars($_POST['stroke_D']);

	$email_subject = "SENTICS_input";
	$email_body = "$text, ' ', 'strokeA:'', $strokeA, ' ', 'strokeB:', $strokeB, ' ', 'strokeC:', $strokeC, ' ', 'strokeD', $strokeD";
	$to = "mattescreen00@gmail.com";
	
	mail($to, $email_subject, $email_body);
	header('Location: thankyou.html');

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

//echo $text, ' ', 'strokeA:', $strokeA, ' ', 'strokeB:', $strokeB, ' ', 'strokeC:', $strokeC, ' ', 'strokeD', $strokeD;
	
	?>
