<?php
namespace Hw4\CS174HW4\views;
use Hw4\CS174HW4\views as V;

$basePath = $_SERVER['DOCUMENT_ROOT'];

class View
{
    public function render($data)
    {
        $basePath = $_SERVER['DOCUMENT_ROOT'];
        $config = require("$basePath/Hw4/CS174HW4/configs/config.php");
        $conn = mysqli_connect($config['host'], $config['username'], $config['password']);
        mysqli_select_db($conn,"Hw4DB");
        $result = mysqli_query($conn, "select * from CHARTDATA");
        $row = mysqli_fetch_array($result);

    	if($data == "LineGraphURL")
    	{
    	   require_once('./../views/lineGraphView.php');
    	   $line = new V\lineGraphView();
	       $line->renderLineGraphView();
    	}
    	else if($data == "PointGraphURL")
    	{
    	   require_once('./../views/pointGraphView.php');
    	   $line = new V\pointGraphView();
	       $line->renderPointGraphView();
    	}
        else if($data == "HistogramURL")
        {
            require_once('./../views/histogramView.php');
            $line = new V\histogramView();
            $line->renderHistogramView();
        }
    	else if($data == "XMLURL")
    	{
            $xml = simplexml_load_file("./../views/XMLView.xml");
            require_once('./../views/XMLPHPView.php');
            $line = new V\XMLPHPView();
            $line->renderXMLPHPView($xml);
    	}
        else if($data == "jsonURL")
        {
            require_once('./../views/jsonView.php');
            $line = new V\jsonView();
            $line->renderjsonView($row);
        }
        else if($data == "jsonpURL")
        {
            require_once('./../views/jsonpView.php');
            $line = new V\jsonPView();
            $line->renderjsonPView();
        }
    }
}

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
    else if (strpos($trailingURL, 'Histogram') != 0)
    {
        $pass = "HistogramURL";
    }
    else if (strpos($trailingURL, 'jsonp') != 0)
    {
        $pass = "jsonpURL";
    }
    else if (strpos($trailingURL, 'xml') != 0)
    {
    	$pass = "XMLURL";
    }
    else if (strpos($trailingURL, 'json') != 0)
    {
        $pass = "jsonURL";
    }

    $view = new View();
    $view->render($pass);