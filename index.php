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
		<script type="text/javascript">
			var FirstCoordinates = new Array();
			function validate()
			{
				var formdata = document.getElementById('dataID').value;
				var  dataArr= formdata.split('\n');
				console.log(dataArr);
				var arrOfArr;
				var FirstIndexes = new Array();

				for(var i=0; i < dataArr.length;i++)
				{
					var perLine = dataArr[i].split(',');
					var f = perLine[0];
					FirstIndexes[i] = f;
					console.log(perLine);
				}
				FirstCoordinates = FirstIndexes;

				for(var i=0; i < FirstCoordinates.length; i++)
				{
					if(FirstCoordinates[i].length == 0)
					{
						alert('Data does not conform. Please enter data in correct format.');
						return false;
					}
					else if (FirstCoordinates[i] == ',')
					{
						alert('Data does not conform. Please enter data in correct format.');
						return false;
					}
					else if (!isNaN(FirstCoordinates[i]))
					{
						alert('Data does not conform. Please enter data in correct format.');	
						return false;
					}
					else
					{
						return true
					}
				}
			}
		</script>
		<h1>PasteChart</h1>
		<p>Share your data in charts!</p>
		<form method='get' action='models/formAction.php'>
			<label> Chart Title</label>
			<input type='text' id ='titleID' name='title' required/>
			<br>
			<textarea name='data' id ='dataID' rows='7' cols='50' placeholder= "Data format should be a comma separated list of values, one per line, up to 50 lines of at most 80 characters, representing points to be plotted." required></textarea>
			<br>
			<input type='submit' onclick="return validate(this)" name='sharebutton' value='Share'/>
		</form>
	</body>
</html>