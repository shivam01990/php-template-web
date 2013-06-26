<?php

/**
 * Sends mail by connecting to an smtp server
 *
 * @param string $subject
 * @param string $smtp_server
 * @param string $smtp_username
 * @param string $smtp_password
 * @param string $html html portion of the message body
 * @param string $text text portion of the message body
 * @param string|array $to
 * @param string $from
 * @param array $cc
 * @param array $bcc
 * @return boolean|string
 */

function sendMail($subject, $html, $text, $to, $cc = array(), $bcc = array()) {
	// require pear classes
	require_once 'Mail.php';
	require_once 'Mail/mime.php';
	include '../mailconfig.php';
	// create the heaers
	$to = is_array($to) ? $to : explode(',', $to);
	
	$headers = array('Subject' => $subject, 'From' => $from, 'To' => implode(',', $to), );
	// end $headers

	// create the message
	$mime = new Mail_mime("\n");
	$mime -> addCc(implode(',', $cc));
	$mime -> addBcc(implode(',', $bcc));
	$mime -> setTXTBody($text);
	$mime -> setHTMLBody($html);

	// always call these methods in this order
	$body = $mime -> get();
	$headers = $mime -> headers($headers);
   
	// create the smtp mail object
	$smtp_params = array('host' => $smtp_server, 'auth' => true, 'username' => $smtp_username, 'password' => $smtp_password, 'timeout' => 20, 'localhost' => $_SERVER['SERVER_NAME'], );
	// end $smtp_params
	$smtp = Mail::factory('smtp', $smtp_params);
    
	// send the message
	$recipients = array_merge($to, $cc, $bcc);
	$mail = $smtp -> send($recipients, $headers, $body);

	// check to make sure there was no error
	if (PEAR::isError($mail)) {
		return $mail -> getMessage();
	}// end if there was an error

	return true;
	// end function sendMail()
}

function EmailNotification1() {

	$file = fopen("../Email_notification_1.html", "r") or exit("Unable to open file!");
	$content = '';
	while (!feof($file)) {
		$content =$content.''.(string)fgetc($file);
	}
	fclose($file);
	return $content.'';

}

function EmailNotification2()
{
	$file = fopen("../Email_notification_2.html", "r") or exit("Unable to open file!");
	$content = '';
	while (!feof($file)) {
		$content =$content.''.(string)fgetc($file);
	}
	fclose($file);
	return $content.'';
}
?>