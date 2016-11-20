<?php

namespace Hw4\views;
use Hw4\views as V;


 class View
{
     public function render($data)
    {

    	if($data == "LineGraphURL")
    	{
    		require_once('./../views/lineGraphView.php');
    	$line = new V\lineGraphView();
	$line->renderLineGraphView();

    	}

    	if($data == "PointGraphURL")
    	{
    		require_once('./../views/pointGraphView.php');
    	$line = new V\pointGraphView();
	$line->renderPointGraphView();

    	}

    	if($data == "XMLURL")
    	{
    		require_once('./../views/XMLView.php');
    	$line = new V\XMLView();
	$line->renderXMLView();

    	}

    	


	
    	


	//require_once('./../views/pointGraphView.php');
    //	$line = new V\pointGraphView();
	//$line->renderPointGraphView();
    }

}

//$fileHandle = fopen("my.txt", "w");  // use "a" for append
//fwrite($fileHandle, $_SERVER['QUERY_STRING']);
//fclose($fileHandle);
$trailingURL = $_SERVER['QUERY_STRING'];
$pass = "";
if (strpos($trailingURL, 'LineGraph') != 0)
{
	$pass = "LineGraphURL";
}
else if (strpos($trailingURL, 'PointGraph') != 0)
{
$pass = "PointGraphURL";

}
else if (strpos($trailingURL, 'xml') != 0)
{
	$pass = "XMLURL";

}

$view = new View();
$view->render($pass);










