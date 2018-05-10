<html>
<head>
<meta charset="utf-8">
<title></title>
<style type="text/css">
.main{
width: 400px;
height: 300px;
margin: 200px auto;
}
.link{
width: 400px;
height: 100px;
margin: auto;
}
</style>
</head>
<body>

<div class="main">
<form action="#" method="post">
<input style="margin: auto; width: 350px" type="password" title="Please input you pass" name="flag">
<input type="submit">
<p style="text-align: center;">pass: 123456<p>
</form>


<?php
if(isset($_POST["flag"])){
    $flag=$_POST["flag"];
    if (strcmp($flag, "123")==0){
        session_start();
        $_SESSION["user"]="admin";
    }else {
        echo "<p style=\"text-align: center;\">"."wrong password"."<p>";
    }
}
?>
</div>
<div class="link">
<table style="align: center;">
<tr>
<td style="width: 100px"><a href="/test/XSS" target="_blank">XSS</a>
</td>
<td style="width: 100px"><a href="/test/CSRF" target="_blank">CSRF</a>
</td>
<td style="width: 100px"><a href="/test/upload" target="_blank">File Upload</a>
</td>
<td style="width: 100px"><a href="#" target="_blank">2</a>
</td>
</tr>
</table>
</div>
</body>
</html>