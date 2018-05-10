<?php
session_start();
if (isset($_SESSION["user"])!=TRUE){
    die("Please Log In");
}
?>
<html>
<head>
<meta charset="utf-8">
<title>CSRF</title>
<style type="text/css">
*{
	padding: 0px;
	margin: 0px;
}

.main{
	height: 600px;
	wdith:600px;
	margin: auto;
}

.main_1{
	height: 250px;
	width: 150px;
	margin: 200px auto;
}
</style>
</head>
<body>
<div class="main">

<div class="main_1">
<p style="text-align: center;">Reset Password</p>
<p>&nbsp;</p>
<hr />
<p>&nbsp;</p>
<form action="do.php" enctype="application/x-www-form-urlencoded" method="get">
Username:<input type="text" placeholder="Username"  name="username" maxlength="8">
Password:<input type="password" placeholder="new password" name="password"  maxlength="8">
Password:<input type="password" placeholder="new password" name="new_password"  maxlength="8">
<input type="submit" value="Sumit">
</form>
</div>
</div>
</body>
</html>
