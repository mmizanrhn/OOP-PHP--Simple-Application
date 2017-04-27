<?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $name    = validate($_POST['name']);
        $email   = validate($_POST['email']);
        $website = validate($_POST['website']);
        $comment = validate($_POST['comment']);
        $gender  = validate($_POST['gender']);
    }

    function validate($data){
         $data = trim($data);
         $data = htmlspecialchars($data);
         $data = stripcslashes($data);
         return $data;
    }
?>

<html>
    <head>
        <title>Student Info</title>
    </head>
    <style>


    </style>
<body>
    <table border="1" align="center">
        <tr>
            <td>Name</td>
            <td><?php echo $name;?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email;?></td>
        </tr>
        <tr>
            <td>Website</td>
            <td><?php echo $website;?></td>
        </tr>
        <tr>
            <td>Comment</td>
            <td><?php echo $comment;?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $gender;?></td>
        </tr>
    </table>
</body>
</html>
