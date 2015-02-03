<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type= "text/css" href="../Project1/css/stylesheet.css" />
	<meta charset = "UTF-8">
	<title>Youliang Pan's Website</title>
</head>
 
<body>

<div id="container">
	<div id="header">Youliang Pan's website</div>

		<div id="menubar">

			<div class="mblinks">
				<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="Biography.html">My Biography</a></li>
				<li><a href="Games.php">Games</a></li>
				<li><a href="Contact.html">Contact Me</a></li>
				</ul>
			</div> <!--links close-->
		</div><!--mblinks close-->

		<div id="main">

			<div class="p">
			<!-- Mail code obtained from http://stackoverflow.com/questions/5335273/how-to-send-an-email-using-php-->
	
			<?php
			$subject = $email = $message = $emailErr = "";
			if (empty($_POST["email"])) {
				$emailErr = "Email is required";
			} else {
				$email = ($_POST["email"]);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Invalid email format"; 
				}
			}
			if (empty($_POST["subject"])) {
				$subject = "";
			} 
			else {
				$subject = ($_POST["subject"]);
			}
			
			if (empty($_POST["message"])) {
				$message = "";
			} 
			else {
				$message = ($_POST["message"]);
			}
			if (isset( $_POST['submit'] ) ) { 
				print("Successfully sent message to youlpan@gmail.com!");
			}
			mail("youlpan@gmail.com",$subject, $message, $email);
			?>
			<!--Email code obtained from http://www.w3schools.com/php/showphp.asp?filename=demo_form_validation_special-->
			<form method="post" action="Contact.php"> 
				Please send me an email if you wish to inquire about references
				or for my resume information.
				<br><br><br>
				Subject: <input type="text" name="subject">*
				<br><br>
				Your e-mail: <input type="text" name="email">
				<span class="error">* <?php echo $emailErr;?></span>
				<br><br>
				Message: <textarea name="message" rows="5" cols="40"></textarea>
				<br><br>
				<input type="submit" name="submit" value="Submit"> 
			</form>
		<p>
		</p>
		</div><!--p class closing tag-->
		</div><!--Main closing tag-->
</div><!-- container div tag close -->
</body><!-- body div tag close -->
</html><!-- html div tag close -->