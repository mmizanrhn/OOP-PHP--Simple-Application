
<?php include("header.php"); ?>
    <div class="content">

        <div class="coding">
            <?php

            if(isset($_FILES['image'])){
                $file = $_FILES['image']['name'];
                $filetmp = $_FILES['image']['tmp_name'];
                move_uploaded_file($filetmp,'images/'.$file);

                echo "File upload successfully";
            }

            ?>

            <form action="index.php" method="post" enctype="multipart/form-data">
                <input type="file" name="image"/><br/>
                <input type="submit" value="Submit"/>
            </form>

        </div>


    </div>
    <?php include("footer.php"); ?>

