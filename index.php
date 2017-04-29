
<?php include("header.php"); ?>
    <div class="content">

        <div class="coding">
            <?php
            $ourfile = fopen("text.txt", "r") or die('File is not found');
            while(!feof($ourfile)){
                echo fgets($ourfile)."<br/>";
            };
            fclose($ourfile);
            ?>

        </div>


    </div>
    <?php include("footer.php"); ?>

