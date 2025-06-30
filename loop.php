
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Looping</title>
</head>
<body>
<form method="POST">
	<input type="text" name="enter" style="height: 35px; width: 200px; border: 1px solid #ccc;">
	<br><br>
	<input type="submit" name="create" value="Results" style="height: 35px; width: 200px; background: green; color: #fff; border: none; cursor: pointer;">
</form>
<br><br>
<?php
$name ="";
if (isset($_POST['create'])){
	for ($i=1; $i<= $_POST['enter']; $i++){
	echo "<input type=\"text\" style='border: 1px solid black; height: 40px; width: 200px; text-align:center' value='{$i}'>";
	echo "<br>";
}
}

?>
</body>
</html>