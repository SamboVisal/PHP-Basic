<html>
<head>
    <title></title>
</head>
<body>
<form method="post" action="form1.php">
    Name : <input type="text" name="name" required>
    <br><br>
    Email : <input type="email" name="email" required>
    <br><br>
    Comments :
    <textarea name="comment"  cols="20" rows="5"></textarea>
    <input type="submit" value="SUBMIT">
</form>
<?php
    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $comment = $_POST["comment"];
    }
?>
</body>
</html>