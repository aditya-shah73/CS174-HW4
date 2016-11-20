<?php

namespace Hw4\views;
//use cmpe174\hw3\views\elements as E;

require_once('View.php');

class pointGraphView extends View
{
	public function render($data)
    {
        renderPointGraphView();
}
    public function renderPointGraphView(){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <script type="text/javascript" src="http://localhost/Hw4/scripts/chart.js" > </script>
            <title>PointGraph - PasteChart</title>
        </head>
        <body>
           <h1>PointGraph - PasteChart</h1>
            <div id="forChart"></div>
           <script type="text/javascript">
         
               graph = new Chart("forChart",  {"Jan":10, "Feb":20, "Dec":5},
                {"title":"Paoit Chart - Month v Value", "type":"PointGraph"})

               console.log("shakti")
              graph.draw();
           </script>
        </body>
        </html>
        <?php
 
    
}
}

