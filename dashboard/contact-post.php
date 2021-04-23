<?php
     require_once'../db.php';
     session_start();
    if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=mysqli_real_escape_string($db,$_POST['message']);
		$insert="INSERT INTO contacts(name,message,email)VALUES('$name','$message','$email')";
		$q=mysqli_query($db,$insert);
		if($q)
		{
			$to = $email; // note the comma
                // Subject
                $subject = 'Got your message';
                // Message
                $message = 'Hello '.$name.' We have got Your message. Thanks for your message';
                // To send HTML mail, the Content-type header must be set
                $headers[] = 'MIME-Version: 1.0';
                $headers[] = 'Content-type: text/html; charset=iso-8859-1';
                // Additional headers
                $headers[] = 'From: Arefin Anwar <arefinanwar112@gmail.com>';
                // Mail it
                $mail = mail($to, $subject, $message, implode("\r\n", $headers));
			echo"success";
			$_SESSION['update_success']='Information updated';
	header('location:contact.php');
		}
		else
		{
			echo"errors";
		}
	}




?>