<!DOCTYPE html>
<html>
<head>
	<title>lesson2</title>

</head>

<body>

<h3>Adding numbers</h3>

<form method = POST>
<input type = "number" name = "number1">
<input type = "number" name = "number2">
<input type = "submit" name="">
</form>

<?php  
$number_1 = $_POST ["number1"];
$number_2 = $_POST ["number2"];
$sum = $number_1 + $number_2;
echo "<br>";
echo "Amount of $number_1 and $number_2 is $sum";
?>

<hr>

<h3>Whats your name?</h3>

<form action = "hello.php">
<input type= "" name="Your_name">
<input type= "submit" name="">

<h3>Whats you email?</h3>

<input type= "email" name="Your_email">
<input type= "submit" name="">
</form>

</body>
</html>