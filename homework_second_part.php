<!DOCTYPE html>
<html>
<head>
	<title>Your data</title>
</head>

<body>
<?php  
$name = $_GET["name"];
$surname = $_GET["surname"];
$old = $_GET["old"];
echo "Is that you?";
echo "<br>";
echo "$name, $surname, $old";
?>

</body>
</html>