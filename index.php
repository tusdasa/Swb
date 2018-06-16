<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
<style type="text/css">
* {
	padding: 0px;
	margin: 0px;
}

.main {
	width: 400px;
	height: 300px;
	margin: 200px auto;
}

.link {
	width: 400px;
	height: 100px;
	margin: auto;
}

header {
	width: 100%;
	height: 200px;
}

header nav {
	width: 80%;
	height: 190px;
	margin: auto;
}

nav p {
	font-size: 50px;
	text-align: center;
	line-height: 190px;
}
</style>
</head>
<body>
	<header>
		<nav>
			<p>Welcome Web Application</p>
		</nav>
	</header>
	<section>
		<div class="main">
			<form action="#" method="post">
				<input style="margin: auto; width: 350px" type="password"
					title="Please input you pass" name="flag"> <input type="submit">
				<p style="text-align: center;">pass: 123456<p>
			</form>
<?php
if (isset($_POST["flag"])) {
    $flag = $_POST["flag"];
    if (strcmp($flag, "123456") == 0) {
        session_start();
        $_SESSION["user"] = "admin";
    } else {
        echo "<p style=\"text-align: center;\">" . "wrong password" . "<p>";
    }
}
?>
</div>
<footer>
<div class="link">
		<table style="align: center;">
			<tr>
				<td style="width: 100px"><a href="/test/XSS" target="_blank">XSS</a>
				</td>
				<td style="width: 100px"><a href="/test/CSRF" target="_blank">CSRF</a>
				</td>
				<td style="width: 100px"><a href="/test/upload" target="_blank">File
						Upload</a></td>
				<td style="width: 100px"><a href="#" target="_blank">-_-</a></td>
			</tr>
		</table>
	</div>
</footer>
	</section>
</body>
</html>