<?php
namespace Hw4\CS174HW4\controllers;
include('Controller.php');

class lineGraphController extends Controller
{
  function __construct()
  {

  }
  
  public function maincontrol()
  {
    header("Location: ../views/View.php/?c=chart&a=show&arg1=LineGraph&arg2=XXXXX");
  }
}