
<?php include("header.php"); ?>
    <div class="content">

        <div class="coding">
            <?php
            $handle = fopen("D:\\xampp\\htdocs\\PHP-OOP-BASED-APPLICATION\\text.txt", "a");
            echo readfile('text.txt')."<br/>";
            ?>

        </div>


    </div>
    <?php include("footer.php"); ?>

