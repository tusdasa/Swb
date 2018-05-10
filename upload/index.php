<?php
session_start();
if(isset($_SESSION["user"])!=TRUE){
    die("Please Log In");
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>File Upload</title>
	<style type="text/css">
	   .main_1{
	       height:400px;
	       width:300px;
	       margin: 250px auto;
	   }
	</style>
</head>
<body>
	<div class="main_1">
		<form action="do.php" method="post"  enctype="multipart/form-data" >
		<input type="file" name="file">
		<input type="submit" >
		</form>
	</div>
	
</body>
</html>