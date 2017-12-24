
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
    
    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $name = $_POST['fname'];
        if(empty($name))
        {
            echo "name is empty";
        }
        else
        {
            echo $name;
        }
    }
?>
<form method="post" action="$request.php">
    Name : <input type="text" name="fname">
    <input type="submit">
</form>
<a href="$request.php?subject=PHP&web=W3schools.com">Type again</a>
</body>
</html>