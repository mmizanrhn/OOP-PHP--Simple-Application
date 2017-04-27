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
            <a href="text.php?msg=Hello World&txt=good bye">Send Data</a>
        </div>
    </div>

    <div class="footer">
        <?php

        echo "<p> All Rights reserved mizanrhn1@gmail.com </p>";

        ?>
    </div>

</body>

</html>