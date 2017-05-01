<?php
include("header.php");
?>
    <div class="content">

        <div class="coding">

            <?php
            $fruits = array (
                "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
                "numbers" => array(1, 2, 3, 4, 5, 6),
                "holes"   => array("first", 5 => "second", "third")
            );
            echo $fruits['fruits']['c'];
            ?>

        </div>


    </div>
    <?php include("footer.php"); ?>

