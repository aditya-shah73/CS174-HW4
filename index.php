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

	//var formdata = "3,4 feb,4,5 mar,4,5";
	var  dataArr= formdata.split('\n');
	console.log(dataArr);
	
	var arrOfArr;
	var FirstIndexes = new Array();

	for(var i=0; i < dataArr.length;i++)
	{
		var perLine = dataArr[i].split(',');
		//console.log(Array.isArray(perLine));
		var f = perLine[0];

		FirstIndexes[i] = f;
		console.log(perLine);
	}
	FirstCoordinates = FirstIndexes;

	firstPart(FirstIndexes);

	

}

function firstPart()
{
	//var FirstCoordinates = new Array();
    // FirstCoordinates = argument[0]; 
	for(var i=0; i < FirstCoordinates.length; i++)
	{
		if(FirstCoordinates[i].length == 0)
		{
			doesNTConform();
		}
		else if (FirstCoordinates[i] == ',')
		{
			doesNTConform();
		}
		else if (!isNaN(FirstCoordinates[i]))
		{
			doesNTConform();	

		}
		else
		{
			alert('correct');
		}

	}


}

function doesNTConform()
{
	alert('Data does not conform. Please enter data in correct format.');
	//window.location = "http://localhost/Hw4/CS174Hw4/index.php"

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
			<input type='submit' onclick="validate()" name='sharebutton' value='Share'/>
		</form>
	</body>
</html>