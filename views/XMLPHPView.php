<?php
namespace Hw4\CS174HW4\views;
use Hw4\CS174HW4\views as V;
class XMLPHPView
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

	 for($i=0; $i<count($keys); $i++)
	 {
	 	
	 	

	 	print "<".$keys[$i].">".$values[$i]."<".$keys[$i].">";
	 	echo "<br>";


	 }

	

	}



}