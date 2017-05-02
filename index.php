<?php
include("header.php");
?>
    <div class="content">

        <div class="coding">

            <?php

            // INDEX ARRAY
            $cars = array("Volbo","Toyota","Maruti","Scania");
            $lentgh = count($cars);
            echo $lentgh;
            // Associative array
            $age = array("Abdullah"=> "30","Mahmud"=>"33","Jamal"=>"28","Habib"=>"25");
            foreach($age as $key => $value){
                echo "Name -".$key." "."Age -".$value."<br/>";
            }

            // Multidimentional array
            $students = array(
                array("Masum","Khalid","Zamil"),
                array("Khairul","Kabir","Bashar"),
                array("Jakir","Kamal","Monir")
            );
            echo $students['0']['2'];

            ?>

        </div>


    </div>
    <?php include("footer.php"); ?>

