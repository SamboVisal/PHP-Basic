<html>
<head>
</head>
<body>

<?php
// define variables and set to empty values
$name = $email = $comment = $website = $gender = "";
if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $name = fun($_POST["name"]);
        $email = fun($_POST["email"]);
        $comment = fun($_POST["comment"]);
        $website = fun($_POST["website"]);
        $gender = fun($_POST["gender"]);
    }
    function fun($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>


<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name : <input type="name" name="name"> <br/><br/>
    Email : <input type="email" name="email"> <br/><br/>
    Comments : <textarea rows="5" cols="40" name="comment"></textarea><br/><br/>
    Gender : <input type="radio" name="gender" value="male">Male
             <input type="radio" name="gender" value="female">Female
    <br/><br/>
    Website : <input type="text" name="website"> <br/><br/>
    <input type="submit" value="submit" name="submit">
</form>

<?php
echo "<h2>Output form </h2>";
echo " Name is $name <br/>";
echo " Email is $email <br>";
echo " Comment $comment <br>";
echo " Gender $gender <br>";
echo " Website $website<br>";
?>

</body>
</html>