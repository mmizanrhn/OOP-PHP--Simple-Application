<?php
include("header.php");
?>
    <div class="content">

        <div class="coding">

            <?php

            $cars = array(
                "color" => "Black",
                "id"    => "201",
                "name"  => "Bmw",
                "company"=>"Nitol"
            );

            foreach($cars as $car => $value){
				echo $value. "<br>";
			}

           ?>

        </div>


    </div>
    <?php include("footer.php"); ?>

