<?php


if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	

	$to = "tonhaview@mysite.com";
	$subject = "New Form Submission";
	$message = "Name: ".$name. "\n"." Wrote the following: ". "\n\n". $message;
	$headers="From: ".$email;


	if (mail($to, $subject, $message, $headers)){

		echo "Success!";

      header("location:contact.html");

	} else{
		 echo "something went wrong";

	}	

}

?>