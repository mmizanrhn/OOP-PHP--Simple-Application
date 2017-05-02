<?php
include("header.php");
?>
    <div class="content">

        <div class="coding">

            <?php

            // INDEX ARRAY
            $cars = array("Volbo","Toyota","Maruti","Scania");
            $lentgh = count($cars);
            for($i=0;$i<$lentgh;$i++){
                echo $cars[$i]."<br/>";
            }
            // Multi associative array
            $age = array("Abdullah"=> "30","Mahmud"=>"33","Jamal"=>"28","Habib"=>"25");
            foreach($age as $key => $value){
                echo "Name -".$key." "."Age -".$value."<br/>";
            }

            ?>

        </div>


    </div>
    <?php include("footer.php"); ?>

