//how to get data from html form to php<br>
<?php 

echo $_GET['user_name'];
echo $_GET['mail'];

?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta  charset="UTF-8"/>
		<title>post &method </title>
	</head>
	<body>
		<form  action="">
		User name:
			<input type="text" name="user_name"/><br>
		Email:
			<input type="email" name="mail"/><br>
			<input type="submit" value="Submit"/>
		</form>
	</body>
</html>
