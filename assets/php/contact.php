<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
	
	$to      = 'xjesmin.ngo@gmail.com';
	$subject = 'Site Contact Form';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		//$res['message'] = 'Form Submission Successful';
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    }
	else{
		//$res['message'] = 'Failed to send mail. Please contact me at xjesmin.ngo@gmail.com instead.';
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
	
	
	echo json_encode($result);
}

?>