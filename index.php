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
            echo $students['0']['2']."<br/>";

            // array_change_key_case() // built in function
            $ages = array(
                "ABDullah" => "30",
                "MahMud"   => "33",
                "jamal"    => "28",
                "habib"    => "25"
            );

            print_r("<pre>");
            print_r(array_change_key_case($ages,CASE_UPPER));
            print_r("</pre>");


            ?>

        </div>


    </div>
    <?php include("footer.php"); ?>

