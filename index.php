<?php
include("header.php");
?>
    <div class="content">

        <div class="coding">

            <?php

            $employess = array(
                array(
                    "id"         => "301" ,
                    "first_name" => "Khalid",
                    "last_name"  => "Zamil"
                ),
                array(
                    "id"         => "402",
                    "first_name" => "Kamal",
                    "last_name"  => "Hossain"
                ),
                array(
                    "id"         => "401",
                    "first_name" => "Mizan",
                    "last_name"  => "Rahman"
                )
            );
           sort($employess);
           print_r("<pre>");
           print_r(array_column($employess,'last_name','id'));
           print_r("</pre>");

           ?>

        </div>


    </div>
    <?php include("footer.php"); ?>

