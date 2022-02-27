<?php

if(isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['phone-number'])){

   
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone-number'];
        $message = $_POST['message'];

        $to = "dishmaeldavid@gmail.com";
        $subject = 'Message from your portfolio.';
        $body = "";
        $body .= "From: ".$name. "\r\n";
        $body .= "Email: ".$email. "\r\n";
        $body .= "Phone: ".$phone_number. "\r\n";
        $body .= "Message: ".$message. "\r\n";

        mail($to, $subject, $body)
			or die('Error!');
		echo"<p>
			'Thank you for contacting me.'
		</p>";
}  
?>