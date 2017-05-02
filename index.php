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

            ?>

        </div>


    </div>
    <?php include("footer.php"); ?>

