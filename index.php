<?php session_start();?>
<?php include("header.php"); ?>
    <div class="content">

        <div class="coding">
            <?php
                $_SESSION['username'] = 'mizan';
                $_SESSION['password'] = '12345';
                /*session_unset();*/
                echo "Username is : ". $_SESSION['username'].'<br/>';
                echo "Password is : ". $_SESSION['password'];
                session_destroy();
            ?>

        </div>


    </div>
    <?php include("footer.php"); ?>

