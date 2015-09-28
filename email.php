<?php 
require_once ('vendor/autoload.php');
require_once('vendor/phpmailer/phpmailer/PHPMailerAutoload.php');

$validator = new Valitron\Validator($_POST);
$validator->rule('required', 'name');
$validator->rule('required', 'email');
$validator->rule('required', 'content');
if($validator->validate()) {
	$validator->rule('email','email');
	if($validator->validate()){
		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;                               // Enable verbose debug output
		
		//$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com;smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'tian.hu.dev@gmail.com';                 // SMTP username
		$mail->Password = "'@q4RIr9}@6uC+f";                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to
		
		$mail->From = 'tian.hu.dev@gmail.com';
		$mail->FromName = 'webadmin';
		$mail->addAddress('tianhaohu@gmail.com');     // Add a recipient
		
		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
		$mail->isHTML(true);                                  // Set email format to HTML
		
		$name = $_POST['name'];
		$mail->Subject = "Message from: $name";
		$mail->Body    = $_POST['content'].' <br/> From this email address: '.$_POST['email'];
		$mail->AltBody = $_POST['content'].' From this email address: '.$_POST['email'];
		
		if(!$mail->send()) {
		    //echo 'Message could not be sent.';
			error_log($mail->ErrorInfo);
			header("location: index.php?fatal_email_error=1#email_form");
		} else {
			header("location: index.php?success=true#email_form");
		   // echo 'Message has been sent';
		}
	}
	else{
		$error_link = "index.php?error=true&email=2";
		header("location: $error_link"); // Email error
	}
} else {
    // Missing Required Errors
    $error_link = "index.php?error=true";
    $error_codes = $validator->errors();
	if(isset($error_codes['name'])){
		$error_link = $error_link."&name=1";
	}
	if(isset($error_codes['email'])){
		$error_link = $error_link."&email=1";
	}
	if(isset($error_codes['content'])){
		$error_link = $error_link."&content=1";
	}
	header("location: $error_link#email_form");
    //print_r($validator->errors());
}

?>