<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$birth=$_POST['birth'];
		$msg=$_POST['product_interest'];

		$to='petitetreats@email.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name:".$name."\n"."Email:".$email."\n"."Birthday:".$birth."Product interests:"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Thank you for signing up for the Tropical Treats Weekly newsletter.</h1>";
			echo "<h2>We have added the following information to our files regarding your interests:</h2>";
			echo "Name: ".$name."<br>";
			echo "Email: ".$email."<br>";
			echo "Email: ".$birth."<br>";
			echo "Product interests: ".$msg."<br>";
			
		}
		else{
			echo "Something went wrong!";
		}
	}
?>