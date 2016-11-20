<?php

namespace Hw4\CS174HW4\views;
//use cmpe174\hw3\views\elements as E;


class jsonView extends View
{
	public function render($data)
    {
        renderjsonView();
}
    public function renderjsonView(){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <script type="text/javascript" src="http://localhost/Hw4/CS174HW4/scripts/chart.js" > </script>
            <title>JsonChart - PasteChart</title>
        </head>
        <body>
           <h1>JsonChart- PasteChart</h1>
            <div id="forChart"></div>
           <script type="text/javascript">
         
               graph = new Chart("forChart",  {"Jan":10, "Feb":20, "Dec":5},
                {"title":"Paoit Chart - Month v Value", "type":"JsonGraph"})

               console.log("shakti")
              graph.draw();
           </script>
        </body>
        </html>
        <?php
 
    
}
}

