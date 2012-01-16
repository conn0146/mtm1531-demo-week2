<?php

var_dump($_POST);

?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Forms</title>
</head>
<body>

<form action="moons.php" method="post">
	    
    <label for="moons">Favourite Moon?</label>
    <input id="moons" name="moons">
    
    <button type="submit">Submit</button>

</form>

<?php if (!empty($_POST['moons'])) : ?>
	<?php if ($_POST['moons'] == 'Deathstar') : ?>
        <p><strong>That's no moon</strong></p>
    <?php else: ?>
        <p><strong>Awesome, <?php echo $_POST['moons']; ?> is a good moon.</strong></p>
    <?php endif; ?>
<?php endif; ?>

</body>
</html>