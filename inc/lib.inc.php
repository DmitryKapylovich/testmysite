<?php
        drawTable(3,3);
        drawTable(3,3);
        drawTable(3,3);
      
     function drawMenu($menu, $vertical=true){
 $style = "";
    if(!$vertical)
        $style = " style='display:inline; margin-right:15px'";
    
    echo "<ul>";
      foreach ($menu as $item){
          echo "<li$style>";
          echo "<a href='$item[href]'>{$item[link]}</a>";
          echo "</li>";
      }
    echo "</ul>";
}
 ?>