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

            if(array_key_exists("colors",$cars)){
                echo "Key already exists";
            }else{
                echo "Key does not exists";
            }

              /* print_r("<pre>");
               print_r($differ);
               print_r("</pre>");*/

           ?>

        </div>


    </div>
    <?php include("footer.php"); ?>

