<?php

namespace Hw4\CS174HW4\views;
//use cmpe174\hw3\views\elements as E;


class jsonView extends View
{
	public function render($data)
    {
        renderjsonView($data);
}
    public function renderjsonView($row){
        echo $row[0];
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
           
            <title>JsonChart - PasteChart</title>
        </head>
        <body>
           <h1>JsonChart- PasteChart</h1>
            <div id="forChart"></div>
           <script type="text/javascript">
          function p()
          {
            document.write("JSON VIEW");

          }
          p();




           </script>
        </body>
        </html>
        <?php
 
    
}
}

