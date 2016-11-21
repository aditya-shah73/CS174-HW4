<?php
namespace Hw4\CS174HW4\models;
use Hw4\CS174HW4\controllers as C;

$basePath = $_SERVER['DOCUMENT_ROOT'];
$config2 = require("$basePath/Hw4/CS174HW4/configs/CreateDB.php");
$config = require("$basePath/Hw4/CS174HW4/configs/config.php");

$title = $_REQUEST['title'];
echo "<br>";
$datafromForm = $_REQUEST['data'];
$data = split("\n", $datafromForm);
for($i =0; $i< count($data); $i++)
{
	echo $data[$i];
	echo "<br>";
}

//hashing data and storing

$hashValue = hash(md5, $datafromForm);
echo gettype($hashValue);
print $hashValue;
PutinDatabase($config, $hashValue, $title, $datafromForm);
require_once("./../controllers/lineGraphController.php");
    $main = new C\lineGraphController();
    $main->maincontrol();

function PutinDatabase($config, $hash, $title, $datafromForm)
{
  $conn = mysqli_connect($config['host'], $config['username'], $config['password']);
  mysqli_select_db($conn,"Hw4DB");
  $sqlInsert = "INSERT INTO CHARTDATA (HASH, TITLE, DATA) VALUES ('$hash', '$title', '$datafromForm')";

  if (mysqli_query($conn, $sqlInsert)) 
  {
    echo "New record created successfully";
  } 
  else 
  {
    echo "Error: " . $sqlInsert . "<br>" . mysqli_error($conn);
  }

  $result = mysqli_query($conn, "select * from CHARTDATA");
  $num_rows = mysqli_num_rows($result);
  echo "<br>";
  print_r($num_rows);
  echo "<br>";
  $num_fields = mysqli_num_fields($result);
  echo $num_fields;
  for($j = 1; $j <= $num_rows; $j++)
  {
	   $row = mysqli_fetch_array($result);
	   print_r($row);
      echo "<br>";
  } 
}