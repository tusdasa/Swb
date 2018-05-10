<?php
session_start();
if (isset($_SESSION["user"])!=TRUE){
    die("Please Log In");
}
?>
<html>
<head>
<meta charset="utf-8">
<title>XSS</title>
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
.text{
	height: 100px;
	width: 173px;
}
</style>
</head>
<body>
<div class="main">

<div class="main_1">
<p style="text-align: center;">Message Board</p>
<p>&nbsp;</p>
<hr />
<p>&nbsp;</p>
<form action="do.php" enctype="application/x-www-form-urlencoded" method="post">
Username:<input type="text" placeholder="Username"  name="username" maxlength="8">
Title:<input type="text" placeholder="Title" name="title"  maxlength="8">
Message:
<textarea class="text" placeholder="Message" name="message" maxlength="10"></textarea>
<div style="width: 120px; height: 20px ;margin: auto;">
<input type="submit" value="Sumit">
<input type="reset" value="Reset"> 
</div>
</form>
</div>
</div>
</body>
</html>