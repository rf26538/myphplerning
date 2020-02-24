<?php
   date_default_timezone_set("india");
        echo "the time is"."<br>".date("h:i:sa");
        echo "<br>";
   $d = mktime("11,12,14,11,2041");
        echo date("y-m-d,h:i:sa",$d);
        echo "<br>";
   $d = strtotime("tomorrow");
        echo date ("y-m-d,h:i:sa",$d);
    echo "<br>";
?>