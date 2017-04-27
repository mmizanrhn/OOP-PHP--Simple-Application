<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP & PHP OOP</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        .header{
            width: 80%;
            margin: 0 auto;
            background-color: #4F5B93;
            color: #000000;
            text-align: center;
            font-style: italic;
        }

        .header h1{
            padding: 8px;
        }

        .content{
            width: 80%;
            height: 450px;
            margin: 0 auto;
            background-color: #ddd;
            color: #000;
        }

        .coding{
            width: 80%;
            margin: 0 auto;
            color: #000;
            padding-top: 20px;
            font-size: 20px;
        }

        .footer{
            width: 80%;
            margin: 0 auto;
            background-color: #4F5B93;
            color: #000000;
            text-align: center;
        }
        .footer p{
            padding: 10px;
        }

    </style>
</head>


<body>
    <div class="header">
        <?php

            echo "<h1> PHP & PHP OOP PRACTICE </h1>";

        ?>
    </div>
    <div class="content">
        <div class="coding">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                Username : <input type="text" name= "username">
                           <input type="submit" value="Submit">
            </form>

            <?php

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $username = $_REQUEST['username'];

                if(empty($username)){
                    echo "<span style='color:red'>The username must not be empty</span>";
                }else{
                    echo "Username is <span style='color:green'>$username </span>";
                }
            }
            ?>
        </div>
    </div>

    <div class="footer">
        <?php

        echo "<p> All Rights reserved mizanrhn1@gmail.com </p>";

        ?>
    </div>

</body>

</html>