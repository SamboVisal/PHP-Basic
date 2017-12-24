<html>
<head>
    <title>

    </title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
<?php
    $namErr =  $emailErr = $passErr = "";
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];
        $pass = $_REQUEST["pass"];
        if(empty($_POST["name"])){
            $namErr =  "Name cannot be empty";
        }
        elseif(empty($_POST["email"])){
            $emailErr = "Email can not empty";
        }
        elseif (empty($_POST["pass"])){
            $passErr = "Can not empty";
        }
        else{

            echo "<h2>The Output is</h2><br><br>";
            echo "Your name is : $name <br>";
            echo "Your email is : $email <br>";
            echo "Your pass is : $pass <br>";
        }
    }
?>
<form method="post" action="form.php">
    Name : <input type="text" name="name"> <span class="error"><?php echo $namErr;?></span><br><br>
    Email : <input type="email" name="email"><span class="error"><?php echo $emailErr;?></span>
    Password : <input type="password" name="pass"><br><br><span class="error"><?php echo $passErr;?></span>
    <input type="submit" name="Submit" value="submit">
</form>
</body>
</html>