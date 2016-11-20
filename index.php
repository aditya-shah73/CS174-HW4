
<?php

function format()
{
	return "here is the formatsdfadsf ";
}

$str =  format();

echo "<!DOCTYPE html>
<html>
<head>
	<title>PasteChart</title>
	<link rel='stylesheet' type='text/css' href='Styles/styles.css'>
</head>
<body>
<h1>PasteChart</h1>
<p>Share your data in charts!</p>
<form method='get' action='models/formAction.php'>
<label> Chart Title</label>
<input type='text' name='title' /><br>
<textarea name='data'  rows='7' cols='50' placeholder=$str>
</textarea><br>

<input type='submit' name='sharebutton' value='Share' />
</form>
</body>
</html>";

