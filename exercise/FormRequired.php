<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <style >
        .error{
          color: red; 
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FormValidate</title>
</head>
<body>
    <h2>Form Validation</h2>
<?php
    $error = "Please refill all form";
    $name = ""; $email = ""; $comment="";
    $nameErr=""; $emailErr="";  $commentErr="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["name"])){
            $nameErr = "Name REquired";
        }
        elseif (!preg_match("/^[a-zA-Z]*$/",$_POST["name"])) {
            $nameErr = "Only alphabets and white space allowed";
        }
        elseif (strlen($_POST["name"])<5) {
            $nameErr = "Name is more than 5 alphabets";
        }
        elseif (empty($_POST["email"])&&empty($_POST["comment"])) {
            echo $error;
        }
        else{
            $name = input($_POST["name"]);

        }
        if(empty($_POST["email"])){
            $emailErr = "Email Required";
        }
        elseif (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
            $emailErr="Email is not valid";
        }
        elseif (empty($_POST["name"])&&empty($_POST["comment"])) {
            echo $error;
        }
        else{
            $email = input($_POST["email"]);
        }
        if(empty($_POST["comment"])){
            $commentErr = "Required Comment";
        }
        elseif (empty($_POST["name"])&&empty($_POST["email"])) {
            echo $error;
        }
        else{
            $comment = input($_POST["comment"]);
        }
    }	


?>
<?php 
    function input($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Name:
    <input type="text" name="name">
    <span class="error">*<?php echo $nameErr;?></span>
    <br><br>
    Email
    <input type="email" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Comment:
    <textarea name="comment" cols="30" rows="10"></textarea>
    <span class="error">* <?php echo $commentErr;?></span>
    <br><br>
    <input type="submit" value="submit">
</form>
<?php

echo "<h2>The Output</h2>"; 
echo "Your name is : $name <br>";
echo "Your email is : $email <br>";
echo "Your Comment : <br> $comment";

?>    
</div>

</body>
</html>