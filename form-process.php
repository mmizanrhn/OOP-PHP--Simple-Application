<pre>
    <?php
        print_r($_POST);
    ?>
</pre>
<?php
if(isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "Username : ".$username."<br/>";
    echo "Password : ".$password;
}else{
    header('location:form.php');
}


?>