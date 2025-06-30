<?php
if(isset($_POST['calculate'])){
	$number1 = $_POST['num1'];
	$number2 = $_POST['num2'];
	$operator = $_POST['operator'];
	$result = "";
	switch ($operator) {
		case '+':
			$result = $number1 + $number2;
			break;
		case '-':
			$result = $number1 - $number2;
			break;
		case '/':
			$result = $number1 / $number2;
			break;
		case '*':
			$result = $number1 * $number2;
			break;
		case '%':
			$result = $number1 % $number2;
			break;
		
		default:
			$result = "Error";
			break;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple Calculator</title>
	<style type="text/css">
		.numbers,select{
			width: 100px; height: 35px; text-align: center;
		}
		.calc{
			width: 325px; height: 35px; text-align: center; border: none; background: green; color: white; cursor: pointer;
		}
		.area{
			width: 325px; height: 80px; border: 2px solid #ccc; border-radius: 5px; font-size: 30px; display: flex; align-content: center; justify-content: center; font-weight: bold; padding-block: 60px;
		}
	</style>
</head>
<body>
<form method="post">
	<input type="number" name="num1" placeholder="num1" class="numbers">
	<select name="operator">
		<option>-operator-</option>
		<option value="+">plus</option>
		<option value="/">divide</option>
		<option value="-">subtract</option>
		<option value="*">multiply</option>
		<option value="%">mod</option>
	</select>
	<input type="number" name="num2" placeholder="num2"class="numbers">
	<br><br>
	<input type="submit" name="calculate" class="calc" value="Calculate">
	<br><br>
	<div class="area">
		<?php echo @$result; ?>
	</div>
</form>
</body>
</html>