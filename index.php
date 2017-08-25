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

            if(array_key_exists("color",$cars)){
                echo "Key already exists";
            }else{
                echo "Key does not exists";
            }

           ?>

        </div>


    </div>
    <?php include("footer.php"); ?>

