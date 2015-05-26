<!DOCTYPE html>

<html>
    <body>
<?php 
$menu = array (
    array ("title" => "Home", "name" =>"Home", "url" => "/", "submenu" => ""),
    array ("title" => "News", "name" =>"News", "url" => "news.php", "submenu" => array (
        array ("title" => "LastNews", "name" =>"LastNews", "url" => "lastnews.php")
  
        )),
    array ("title" => "Publication", "name" =>"Publication", "url" => "publication.php"),        
    array ("title" => "About Us", "name" =>"About Us", "url" => "about.php"),        
    array ("title" => "Contacts", "name" =>"Contacts", "url" => "contacts.php"),       
            
);

function tree ($menu = array()){
    echo "<ul>";
    foreach ($menu as $val) {
        echo "<li>";
        echo "<a href = '".$val ['url']."' title='".$val ['title']."'>".$val ['name']."</a>";
        if (!empty ($val ['submenu'])){
            tree ($val['submenu']);
            
        }
        echo "</li>";
             
    }   
    echo "</ul>";    

        }
        tree ($menu);
        

        ?> 
 </body>   
</html>
