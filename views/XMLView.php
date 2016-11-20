<?php

namespace Hw4\views;
//use cmpe174\hw3\views\elements as E;

require_once('View.php');

class XMLView extends View
{
    public function render($data)
    {
        renderXMLView();
}
    public function renderXMLView(){
        ?>
     
     
<!DOCTYPE chart SYSTEM "/Applications/XAMPP/xamppfiles/htdocs/Hw4/chart.dtd" >
<chart>
    <titleofChart>shakti</titleofChart>
    <hash>hashvalue</hash>
    <datas>datavalue</datas>
   


</chart>
        <?php
 
    
}
}





    