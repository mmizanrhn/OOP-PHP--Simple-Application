<?php
include("header.php");
?>
    <div class="content">

        <div class="coding">
            <?php

            $url = "http://www.conferbd.com";
            if(filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)){
                echo "This is valid web address";
            }else{
                echo "It has not query string";
            }

            ?>

        </div>


    </div>
    <?php include("footer.php"); ?>

