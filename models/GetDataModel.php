<?php
namespace Hw4\CS174HW4\models;
use Hw4\CS174HW4\controllers as C;

$basePath = $_SERVER['DOCUMENT_ROOT'];

class GetDataModel
{
	function GetData()
	{
		$config = require("$basePath/Hw4/CS174HW4/configs/config.php");
		$conn = mysqli_connect($config['host'], $config['username'], $config['password']);
		mysqli_select_db($conn,"Hw4DB");
		$result = mysqli_query($conn, "select DATA from CHARTDATA");
		$row = mysqli_fetch_array($result);
		return $row;
	}
}