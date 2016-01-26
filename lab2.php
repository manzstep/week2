<html>
<head>
<meta charset="utf-8">
<title>Lab 2</title>
<link rel="stylesheet" type="text/css" href="css/lab2.css" />
<script src="js/lab2.js"></script>
</head>
<body>
<form action="lab2.php" method="post">
    <ul id="nav">
	<p> Enter your name </p>
	<input type="text" name="name" size="25px">
	<p> Now enter your age </p>
	<input type="text" name="age" size="25px">
	<p> Now you must enter a password: </p>
	<input type="password" name="pass" size="25px">
	<p> Choose your favourite animal from the list!</p>
	<select name="animals">
        <option> Select...</option>
		<option> Dog</option>
		<option> Cat</option>
		<option> Mouse</option>
		<option> Eagle</option>
		<option> Cow</option>
	</select>
	<p> Finally, check the box to confirm that you read our <a href="terms.html">terms of agreement</a> (Open in new tab to avoid loss of inputs</p>
	<input type="checkbox" name="confirm">
    <p></p>
	<input name="submit1" type="submit" value="Submit">
    </ul>
</form>
</body>
</html>

<?php
	if(isset($_POST['submit1'])){
		$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$age = filter_var($_POST['age'], FILTER_SANITIZE_STRING);
		$animals = $_POST['animals'];
		$checkbox = $_POST['confirm'];
		$password = $_POST['pass'];
		if(!$name or !$password  or !$age or !$checkbox){
			echo "<script>alert('You need to enter your name, age, password, and check the box')</script>";
		} else {
			echo "<br><h1>Information Entered</h1>";
			echo "Name: ".$name;
			echo "<br>Age: ".$age;
			if($animals == "Select..."){
				echo "<br>Animal: No Selection";
			} else {
				echo "<br>Animal: ".$animals;
			}
			echo "<br>Checkbox Validation: True";
			echo "<script>alert('Thank you for submitting your form');</script>";
			
		}
	}
?>
