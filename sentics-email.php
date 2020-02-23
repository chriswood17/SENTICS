	<?php
//receive form data
	$text = htmlspecialchars($_POST['text_input']);
	$strokeA = htmlspecialchars($_POST['stroke_A']);
	$strokeB = htmlspecialchars($_POST['stroke_B']);
	$strokeC = htmlspecialchars($_POST['stroke_C']);
	$strokeD = htmlspecialchars($_POST['stroke_D']);

echo $text, ' ', $strokeA, $strokeB, $strokeC, $strokeD;
	
	?>
