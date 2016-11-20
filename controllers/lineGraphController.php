<?php

namespace Hw4\controllers;

include('Controller.php');

use Hw4 as H;



class lineGraphController extends Controller
{
    function __construct()
    {
    	//this is constructor
    }

    public function maincontrol()
    {

	header("Location: ../views/View.php/?c=chart&a=show&arg1=LineGraph&arg2=XXXXX");
	//require_once('./../views/View.php');
      //  $mainRender = new H\views\View();
       // $mainRender->render("shakti");



    }
}