<?php include 'database.php' ?>

<?php 
	//Create query
	$query = "Select + FROM shouts ORDER BY id DESC";
	$shouts = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>JS ShoutBox</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	
	<div id="container">
		<header> 
			<h1>JS Shoutbox</h1>
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script type="text/javascript" src="js/script.js"></script>
		</header>
	</div>
	<div id="shouts">
		<ul>
		<?php while ($row = mysqli_fetch_assoc($shouts)) : ?>
			<li><?php echo $row['name']; ?> <?php echo $row['shout']; ?> <?php echo $row['date']; ?>;</li>
		<?php  endwhile; ?>
		</ul>
	</div>
		
	</div>
	<footer>
		<label>Name: </label>
		<input type="text" id="name" name="">
		<label>Shout Text </label>
		<input type="text" id="shout" name="">
		<input type="submit" id="submit" name="" value="SHOUT!">
	</footer>
</body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>JS Shoutbox</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript"	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" scr="js/script.js"></script>
</head>
<body>
	<header>
		<h1>JS Shoutbox</h1>
	</header>
	<div id="shouts">
		<ul>
			<li></li>
		</ul>
	</div>
	<footer>
		<form>
			<label>Name: </label>
			<input type="text" id="name" name="">
			<label>Shout Text" </label>
			<input type="text" id="shout" name="">
			<input type="submit" id="submit" value="SHOUT!" name="">
		</form>
	</footer>
</body>
</html> -->