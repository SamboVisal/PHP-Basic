<html>
<head>

</head>
<body>
<?php
    $name = $email = $pass = "";
    $nameErr = $emailErr = $passErr = "";
    if ($_SERVER["REQUEST_METHOD"]=="POST"){

        if (empty($_POST["name"])){
            $nameErr = "Name cannot empty";
        }
        else{
            $name = $_POST["name"];
        }
        if(empty($_POST["email"])){
            $emailErr = "Email cannot empty";
        }
        else{
            $email = $_POST["email"];
        }
        if (empty($_POST["pass"])){
            $passErr = "password can not empty";
        }
        else{
            $pass = $_POST["pass"];
        }
    }
?>
    <form method="post" action="form2.php">
        Name : <input type="text" name="name">
        <span><?php echo $nameErr;?></span> <br>
        Email : <input type="email" name="email">
        <span><?php echo $emailErr;?></span> <br>
        Password : <input type="password" name="pass">
        <span><?php echo $passErr;?></span> <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>