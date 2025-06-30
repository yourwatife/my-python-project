<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Courseform</title>
	<style type="text/css">
		table{
			width: 80%; margin-left: 10%;
			border-collapse: collapse;
			border-color: black;
		}
		td{
			text-align: center;
		}
		.search{
			height: 35px; width: 200px; border: 1px solid #ccc; border-radius: 5px;
			margin-left: 10%; text-align: center;
		}
		.cr{
			height: 35px; width: 200px; background: #256fad; color: #fff; border:none; cursor: pointer;
		}
		.title{
			width: 42%;
		}
	</style>
</head>
<body>
	<form method="post">
		<input type="text" name="search" placeholder="Enter the number courses" class="search">
		<input type="submit" name="create" class="cr" value="Generate">
	</form>
<br>
<?php
if(isset($_POST['create'])){
	echo"<table border = '1' cellpadding=\"4\">";
	echo "<tr>
			<th>S/N</th><th>Course Code</th><th>Course Title</th><th>Units</th><th>Signature</th>
		</tr>";
	for($i = 1; $i <= $_POST['search']; $i++){
		echo "<tr>
			<td>{$i}</td><td></td><td class='title'></td><td></td><td></td>
		</tr>";
	}
	echo "</table>";

}
?>




	<!-- <table border="1" cellpadding="4">
		<tr>
			<th>S/N</th><th>Course Code</th><th>Course Title</th><th>Units</th><th>Signature</th>
		</tr>
		<tr>
			<td>1</td><td>CIT 201</td><td>Server side Web Development</td><td>1</td><td></td>
		</tr>
		
	</table> -->
</body>
</html>