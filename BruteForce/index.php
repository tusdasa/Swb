<?php 
if (isset($_SESSION["user"])!=true){
    die("Please Log In");
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>BruteForce</title>
	<style type="text/css"></style>
</head>
<body>
	<form action="do.php" method="post">
		<input type="text" name="username">
		<input type="password" name="password">
		<input type="submit">
	</form>
</body>
</html>