<?php

namespace Hw4\CS174HW4\views;
//use cmpe174\hw3\views\elements as E;


class lineGraphView extends View
{
	public function render($data)
    {
        renderLineGraphView();
}
    public function renderLineGraphView(){
        $basePath = $_SERVER['DOCUMENT_ROOT'];
        $config = require("$basePath/Hw4/CS174HW4/configs/config.php");
        $conn = mysqli_connect($config['host'], $config['username'], $config['password']);

     mysqli_select_db($conn,"Hw4DB");
     $result = mysqli_query($conn, "select DATA from CHARTDATA");
     
     $row = mysqli_fetch_array($result);
     $data = $row[0];
    // echo $data;


        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
             <script type="text/javascript" src="http://localhost/Hw4/CS174HW4/scripts/chart.js" > </script>
            <title>LineGraph - PasteChart</title>
        </head>
        <body>
         
           <h1>LineGraph - PasteChart</h1>
           <div id="forChart"></div>
          

           <script type="text/javascript">
         
               graph = new Chart("forChart",  {"Jan":10, "Feb":20, "Dec":5}, {"title":"Test Chart - Month v Value", "type":"LineGraph"})

               console.log("shakti")
              graph.draw();
           </script>
          

        </body>
        </html>
        <?php
 
    
}
}


