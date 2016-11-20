<?php
namespace Hw4\CS174HW4\views;

class XMLPHPView extends View
{
	function render($data)
	{
		renderXMLPHPView($xmlObj);
	}

	function renderXMLPHPView($xmlObj)
	{
		$arr = (array) $xmlObj;
		$keys = array_keys($arr);
		$values = array_values($arr);
		?>
    	<!DOCTYPE html>
    	<html lang="en">
      	<head>   
        	<title>XMLChart - PasteChart</title>
      	</head>
      	<body>
        	<h1>XMLChart- PasteChart</h1>
      	</body>
    	</html>
    	<?php 
		for($i=0; $i<count($keys); $i++)
		{
			$test = "< $keys[$i]".">";
			$test2 =  "< /$keys[$i]".">";
			print $test.$values[$i].$test2;
			echo "<br>";
		}
	}
}