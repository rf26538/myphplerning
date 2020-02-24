<?php
   
   $frendsname = array("aryan","ravi","rax");
   $arrlenght = count($frendsname);
   for ($i=0; $i < $arrlenght; $i++) 
   {
   	echo "<h3>";
   	echo"<li>";
   	echo $frendsname[$i];
   	echo "<hr>";
   }
   echo "<h3>";
   $price = array("rs"=>"52","rm"=>"34","ri"=>"54");
    echo $price["rm"];
    echo "<br>";
    echo $price["ri"];
    echo "<br>";
    echo $price["rs"];
    echo "<br>";
    echo "<h3>";
    echo "<ul>";
    $id = array (array("ravi","21","32/01/1993"),
    	  array("ram","32","01/02/1996"),
    	  array("raz","28","11/02/1996")
          );
    echo $id[0][0]." age is ".$id[0][1]." born in ".$id[0][2]."<br>";
    echo $id[1][0]." age is ".$id[1][1]." born in ".$id[1][2]."<br>";
    echo $id[2][0]." age is ".$id[2][1]." born in ".$id[2][2]."<br>";
    echo "<br>";
?>