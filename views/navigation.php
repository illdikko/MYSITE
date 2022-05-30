<?php
echo "<ul>";
    foreach($menu as $key => $value)
    {
        if(is_array($value)) //is_array permet de vérifier si une variable est un tableau ou pas
        {
            echo "<li>".$key."</li>";
            echo "<ul>";

            foreach($value as $subKey => $subValue)
            {
                echo "<li><a href='".$subValue."'>".$subKey."</a></li>";
            }
            echo "</ul>";
        }
        else 
            echo "<li><a href='". $value . "'>".$key."</a></li>";
    }
echo "</ul>";
?>