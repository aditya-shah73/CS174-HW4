<?php
namespace Hw4\CS174HW4\views;

class jsonView extends View
{
	public function render($data)
  {
    renderjsonView($data);
  }

  public function renderjsonView($json)
  {
    ?>
    <!DOCTYPE html>
    <html lang="en">
      <head>   
        <title>JsonChart - PasteChart</title>
      </head>
      <body>
        <h1>JsonChart- PasteChart</h1>
      </body>
    </html>
    <?php 
    $arr = array();
    $arr[] = $json;
    echo '<pre>';
    print_r($arr);
    echo "</pre>";
    echo json_encode($arr); 
  }

}