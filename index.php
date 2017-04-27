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
            <form action="text.php" method="post">
                <table>
                    <tr>
                        <td>Name  </td>
                        <td><input type="text" name="name" placeholder="Name" required></td>
                    </tr>
                    <tr>
                        <td>Email  </td>
                        <td><input type="email" name="email" placeholder="Email" required></td>
                    </tr>
                    <tr>
                        <td>Website  </td>
                        <td><input type="text" name="website" placeholder="Website" required></td>
                    </tr>
                    <tr>
                        <td>Comment  </td>
                        <td><textarea name="comment" cols="40" rows="4" placeholder="Write something here" required></textarea></td>
                    </tr>
                    <tr>
                        <td>Gender  </td>
                        <td><input type="radio" name="gender" value="male">Male  &nbsp; &nbsp;<input type="radio" name="gender" value="female">Female</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <div class="footer">
        <?php

        echo "<p> All Rights reserved mizanrhn1@gmail.com </p>";

        ?>
    </div>

</body>

</html>