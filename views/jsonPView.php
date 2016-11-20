<?php

namespace Hw4\CS174HW4\views;
//use cmpe174\hw3\views\elements as E;


class jsonPView extends View
{
	public function render($data)
    {
        renderjsonPView();
}
    public function renderjsonPView(){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <script type="text/javascript" src="http://localhost/Hw4/CS174HW4/scripts/chart.js" > </script>
            <title>JsonPChart - PasteChart</title>
        </head>
        <body>
           <h1>JsonPChart- PasteChart</h1>
            <div id="forChart"></div>
           <script type="text/javascript">
         
               graph = new Chart("forChart",  {"Jan":10, "Feb":20, "Dec":5},
                {"title":"Paoit Chart - Month v Value", "type":"JsonPGraph"})

               console.log("shakti")
              graph.draw();
           </script>
        </body>
        </html>
        <?php
 
    
}
}

