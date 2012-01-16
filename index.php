<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Query Strings</title>
</head>
<body>

<?php
	echo $_GET['name'];
	echo ' ';
	echo $_GET['lastname'];
?>

<a href="name.php?name=Tracy">Tracy</a>
<a href="name.php?name=Jason">Jason</a>
<a href="name.php?name=Brent">Brent</a>
<a href="name.php?name=Janet">Janet</a>

</body>
</html>