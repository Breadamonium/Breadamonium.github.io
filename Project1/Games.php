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
			<li><a href="Contact.php">Contact Me</a></li>
			</ul>
		</div>
	</div>

	<div id="main">
		<div class="p">
		<?php 
				function calculateScore($initialscore){
					$score = $initialscore;
					$Hand = $_POST["Handed"];
					if($Hand == "Right"){
						$score+=1;
					}
					else{
						$score+=0;
					}
					$number = $_POST["number"];
					if(preg_match("/4/i", $number)){
						$score+=1;
					}
					else{
						$score+=0;
					}
				
					$instruments = $_POST["instru"];
					foreach($instruments as $instrum){
						if($instrum == "recorder"){
							$score +=1;
						}
						elseif($instrum == "piano"){
							$score +=1;
						}
						elseif($instrum == "trumpet"){
							$score +=1;
						}
						elseif($instrum == "euphonium"){
							$score +=1;
						}
						else {
							$score +=0;
						}
					}
					$color = $_POST["fav_color"];
					if($color =="1"){
						$score+=1;
					}else{
						$score+=0;
					}
					echo($score);
				}
				if (isset( $_POST['submit'] ) ) { 
					print("Your score is: ");
					calculateScore(0);
					print(" out of 7"); 
				}	
		?>
			<h5> Let's try a guessing game/quiz about me! </h5>
			<form method="post" action="Games.php"> 
				What hand do I use to write with? 
				<input type= "radio" name = "Handed" value = "Left"> Left
				<input type= "radio" name = "Handed" value = "Right"> Right
				<br><br>
				Guess a number and see if it matches mine. (1-10): <input type="text" name="number">
				<br><br>
				What instruments have I played? <br>
				<input type = "checkbox" name="instru[]" value="recorder"> Recorder
				<input type = "checkbox" name="instru[]" value="trumpet"> Trumpet
				<input type = "checkbox" name="instru[]" value="violin"> Violin
				<input type = "checkbox" name="instru[]" value="piano"> Piano
				<input type = "checkbox" name="instru[]" value="clarinet"> Clarinet
				<input type = "checkbox" name="instru[]" value="euphonium"> Euphonium
				<br><br>
				What is my favorite color? 
				<select name="fav_color">
					<option value = "0"> </option>
					<option value = "1"> White</option>
					<option value = "2"> Black</option>
					<option value = "3"> Blue</option>
					<option value = "4"> Green</option>
					<option value = "5"> Red</option>
				</select>
				<br><br>
				<input type="submit" name="submit" value="Submit"> 
			</form>
		</div> <!--p class div tag close-->
	</div><!-- main div tag close-->
</div><!-- container div tag close -->
</body><!-- body div tag close -->
</html><!-- html div tag close -->
