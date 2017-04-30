<?php
include("header.php");

?>
    <div class="content">

        <div class="coding">
            <?php
                if(!isset($_COOKIE['visited'])){
                    setcookie("visited","1",time()+86400,"/") or die("Could not set cookie");
                    echo "This is your first visit";
                }else{
                    echo "Your are our old visitor";
                }

            ?>

        </div>


    </div>
    <?php include("footer.php"); ?>

