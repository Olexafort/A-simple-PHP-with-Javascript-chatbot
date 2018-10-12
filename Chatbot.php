<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$greet = $_POST['greet'];

	$answers = array(
	"I'm fine, How are you?",
	"Good afternoon",
	"This is Awesome",
	"PHP Programming rocks",
	"Practise Makes Perfect",
	"Software Engineering Rocks");

	$answer = array_rand($answers);
	$rep = $answers[$answer];
	?>

	<script type="text/javascript">
		alert("<?php echo $rep ." ". $name ?>");
	</script>

	<?php

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Array Answers</title>
</head>
<body>
	<form action="array.php" method="POST">
		<input type="text" name="name" placeholder="Enter your name"><br><br>
		<input type="text" name="greet" placeholder="Enter Greeting"><br><br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>