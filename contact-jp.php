<?php

// variables
$to = 'seannarron@gmail.com';
$subject = "Message from a client";

$error_open = "<label class='error'>";
$error_close = "</label>";
$valid_form = TRUE;
$redirect = "success-jp.php";

$form_elements = array('name', 'phone', 'country', 'email', 'comments');
$required = array('name', 'phone', 'email');

foreach ($required as $require)
{
	$error[$require] = '';
}

if (isset($_POST['submit']))
{
	// process form
	
	// get form data
	foreach ($form_elements as $element)
	{
		$form[$element] = htmlspecialchars($_POST[$element]);
	}
	
	// check form elements
		// check required fields
		if ($form['name'] == '')
		{
			$error['name'] = $error_open . "入力が必要です！" . $error_close;
			$valid_form = FALSE;
		}
		if ($form['phone'] == '')
		{
			$error['phone'] = $error_open . "入力が必要です！" . $error_close;
			$valid_form = FALSE;
		}
		if ($form['email'] == '')
		{
			$error['email'] = $error_open . "入力が必要です！" . $error_close;
			$valid_form = FALSE;
		}
		
		// check formatting
		
		
		if ($error['email'] == '' && !preg_match('/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/', $form['email']))
		{
			$error['email'] = $error_open . "Please enter a valid email!" . $error_close;
			$valid_form = FALSE;
		}
	
	// check for bad data
	if (//contains_bad_str($form['name']) ||
		contains_bad_str($form['email']) ||
		contains_bad_str($form['phone']) ||
		contains_bad_str($form['country']) ||
		contains_bad_str($form['comments']))
	{
		$valid_form = FALSE;
	}	
	if (contains_newlines($form['name']) ||
		contains_newlines($form['email']) ||
		contains_newlines($form['phone']) ||
		contains_newlines($form['country']))
	{
		$valid_form = FALSE;
	}	
	
	// check if form is valid
	if ($valid_form)
	{
		// create message
		$message = "Name: " . $form['name'] . "\n";
		$message .= "Email: " . $form['email'] . "\n";
		$message .= "Phone: " . $form['phone'] . "\n";
		$message .= "Country: " . $form['country'] . "\n\n";
		$message .= "Message: " . $form['comments'];
		
		$headers = "From: seannarron.com <admin@seannarron.com>\r\n";
		$headers .= "X-Sender: <admin@seannarron.com>\r\n";
		$headers .= "X-Mailer: PHP/". phpversion() ."\r\n";
		$headers .= "Reply-To: " . $form['email'];
		
		// send email
		mail($to, $subject, $message, $headers);
		
		// redirect
		header("Location: " . $redirect);
	}
	else
	{
		include('form-jp.php');
	}
	
}
else
{
	foreach ($form_elements as $element)
	{
		$form[$element] = '';
	}

	// display form
	include('form-jp.php');
}



function contains_bad_str($str_to_test) {
	$bad_strings = array(
		"content-type:",
		"mime-version:",
        "multipart/mixed",
		"Content-Transfer-Encoding:",
        "bcc:",
		"cc:",
		"to:");
  
	foreach($bad_strings as $bad_string) {
		if(stristr(strtolower($str_to_test), $bad_string)) {
      		return true;
    	}
  	}
  	return false;
}

function contains_newlines($str_to_test) {
   if(preg_match("/(%0A|%0D|\\n+|\\r+)/i", $str_to_test) != 0) {
     return true;
   }
   return false;
}

?>










