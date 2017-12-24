<html>
<head>
    <title></title>
    <style>
        .error{ background-color: aqua;}
    </style>
</head>
<body>
<?php
    $nameErr = $emailErr = $commentErr = $genderErr = $websiteErr = "";
    $name = $email = $comment = $gender = $website = "";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["name1"])){
            $nameErr = "Name Required";
        }
        else {
            $name = fun($_POST["name1"]);
        }
        if(empty($_POST["email"])){
            $emailErr = "Email Required";
        }
        else{
            $email = fun($_POST["email"]);
        }
        if(empty($_POST["website"])){
            $websiteErr = "Need web address";
        }
        else{
            $website = fun($_POST["website"]);
        }
        if (empty($_POST["comment"])) {
            $commentErr = "require comment";
        } else {
            $comment = fun($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = fun($_POST["gender"]);
        }
    }
   function fun($data)
   {
       $data = trim($data);
       $data = htmlspecialchars($data);
       $data = stripslashes($data);
       return $data;
   }
?>
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name1">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Website: <input type="text" name="website">
    <span class="error">*<?php echo $websiteErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
   <span class="error">*<?php echo $commentErr?></span>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
    echo "<h2>Output of information:</h2>";
    echo "Name is : $name <br/>";
    echo "Email is : $email <br/>";
    echo "Website is : $website <br/>";
    echo "comment : $comment <br/>";
    echo "gender is : $gender <br/>";
?>
</body>
</html>