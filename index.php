<?php
include("header.php");
?>
    <div class="content">

        <div class="coding">
            <?php
            if(isset($_POST['text'])){
                global $txt;
                $txt = $_POST['text'];
                echo trim($txt,' .');
            }

            ?>
            <form action="index.php" method="post">
                <input type="text" name="text" value="<?php global $txt; echo $txt; ?>"><br/>
                <input type="submit" value="Submit"/>
            </form>

          </div>


    </div>
    <?php include("footer.php"); ?>

