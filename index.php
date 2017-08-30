<?php
include("header.php");
?>
    <div class="content">

        <div class="coding">

            <?php
			    
				$a = 5;
				$b = 8;
				$c = 7;
				$d = 20;
				// This is logical expression primary example 
				if( ($a <= $b) && ($d >= $c)){
					echo "B is larger than A AND". "<br>";
					echo "C is smaller than D";
				}
				
				echo "<br/>";
				
				// This is logical expression example 
				$e = 100;
				if(!isset($e)){
					$e = 200;
				}
				echo $e."<br>";
				
				// This is logical expression practical example 
				$quantity = "";
				if( empty($quantity) && !is_numeric($quantity) ){
					echo "Please input your quantity here";
				}
				
			?>

        </div>


    </div>
    <?php include("footer.php"); ?>

