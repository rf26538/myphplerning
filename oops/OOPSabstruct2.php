<?php
	abstract class parentclass{
		abstract protected function prefixName($name);
		}
		class childclass extends parentclass{
			public function prefixName($name){
			if ($name == "vikky rawat")
			{
				$prefix = "Mr.";
			}elseif ($name == "mia singh"){
				$prefix = "Mrs.";
			}else{
				$prefix ="";
				}
			return "{$prefix} {$name}";
			}
		}
	$class = new childclass;
	 echo $class->prefixName("vikky rawat");
	 	echo "<br>";
	 echo $class->prefixName("mia singh");
?>