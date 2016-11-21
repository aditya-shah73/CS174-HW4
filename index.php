<?php
function format()
{
	return "here is the form";
}

$str =  format();
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>PasteChart</title>
		<link rel='stylesheet' type='text/css' href='Styles/styles.css'>
	</head>
	<body>
		<h1>PasteChart</h1>
		<p>Share your data in charts!</p>
		<form method='get' action='models/formAction.php'>
			<label> Chart Title</label>
			<input type='text' name='title' required/>
			<br>
			<textarea name='data' rows='7' cols='50' placeholder= "Data format should be a comma separated list of values, one per line, up to 50 lines of at most 80 characters, representing points to be plotted." required></textarea>
			<br>
			<input type='submit' name='sharebutton' value='Share'/>
		</form>
	</body>
</html>