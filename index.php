<?php
    $name    = $email   = $website = $comment = $gender  = "";
    $errname    = $erremail   = $errweb = $errgender  = "";

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if(empty($_POST['name'])){
            $errname = "Name is required";
        }else{
            $name    = validate($_POST['name']);
        }

        if(empty($_POST['email'])){
            $erremail = "Email is required";
        }else{
            $email   = validate($_POST['email']);
        }

        if(empty($_POST['website'])){
            $errweb = "Website is required";
        }else{
            $website = validate($_POST['website']);
        }

        if(empty($_POST['gender'])){
            $errgender = "Gender is required";
        }else{
            $gender  = validate($_POST['gender']);
        }
        $comment = validate($_POST['comment']);

    }

    function validate($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripcslashes($data);
        return $data;
    }
?>

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
            padding: 0px;
            margin: 0px;
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
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                <p style="color:#ff0000;">*Required field</p>
                <table>
                    <tr>
                        <td>Name  </td>
                        <td><input type="text" name="name" placeholder="Name"> * <?php echo "<span style='color:#ff0000'>$errname</span>"; ?></td>
                    </tr>
                    <tr>
                        <td>Email  </td>
                        <td><input type="email" name="email" placeholder="Email">* <?php echo "<span style='color:#ff0000'>$erremail</span>"; ?></td>
                    </tr>
                    <tr>
                        <td>Website  </td>
                        <td><input type="text" name="website" placeholder="Website">* <?php echo "<span style='color:#ff0000'>$errweb</span>"; ?></td>
                    </tr>
                    <tr>
                        <td>Comment  </td>
                        <td><textarea name="comment" cols="40" rows="4" placeholder="Write something here"></textarea></td>
                    </tr>
                    <tr>
                        <td>Gender  </td>
                        <td><input type="radio" name="gender" value="male">Male  &nbsp; &nbsp;<input type="radio" name="gender" value="female">Female * <?php echo "<span style='color:#ff0000'>$errgender</span>";?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
            <?php
            echo "Today is "." ". date('Y/m/d')."<br/>";
            echo "Today is "." ". date('l')."<br/>";
            echo "Today is "." ". date('d/m/y')."<br/>";

            date_default_timezone_set('Asia/Dhaka');
            echo "Today is ". " ". date('l')."<br/>";
            echo "Bangladesh time is"." ". date('h:i:sa')."<br/>";

            echo date_default_timezone_get();



            ?>
        </div>


    </div>

    <div class="footer">
        <?php
        echo "<p> &copy;<?php echo date('Y');?>Copyright by mmeezan1987 </p>";
        echo "<p> All Rights reserved mizanrhn1@gmail.com </p>";

        ?>
    </div>

</body>

</html>