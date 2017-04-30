
<?php include("header.php"); ?>
    <div class="content">

        <div class="coding">
            <?php
            if(isset($_FILES['file'])){
                $file = $_FILES['file']['name'];
                $filetmp = $_FILES['file']['tmp_name'];
                move_uploaded_file($filetmp,'uploads/'.$file);

                echo "File is uploaded successfully";
            }

            ?>
            <form action="index.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file"/><br/>
                <input type="submit" value="Submit"/>
            </form>
        </div>


    </div>
    <?php include("footer.php"); ?>

