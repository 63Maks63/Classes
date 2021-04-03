<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>

<body>

<h3>Your name</h3>

<form action= "home_work_second_part.php">	
<input type="" name="name">
<h3>Your surmane</h3>
<input type="" name="surname">
<h3>How old are you?</h3>
<input type="" name="old">
<br>
<br>
<br>
<button>Registration</button>
</form>
<hr>

<h3>First side of the rectangle</h3>
<form method =POST>
<input type="number" name="side1">
<h3>Second side of the rectangle</h3>
<input type="number" name="side2">
<br>
<br>
<br>
<button>Calculate perimeter and area</button>
</form>

<br>
<br>
<br>

<?php  
$perimeter = $_POST["side1"];
$area = $_POST["side2"];
$per = 2*($perimeter+$area);
$are = $perimeter*$area;
echo "The perimeter is $per";
echo "<br>";
echo "The area is $are";
?>

</body>
</html>