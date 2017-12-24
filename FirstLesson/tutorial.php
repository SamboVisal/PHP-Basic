<html>
<head>
    <title>Hello World</title>
</head>
<body>
<?php
    $a = "Hello";
    $hello = "Hello everyone";
    echo $a . "<br/>";
    echo $hello . "<br/>";
    //echo $$a."<br/>";
    $b = "Pisal";
    $c = "Visal";
    $d = "Michael";
    $e = "Jackson";
    $f = "Bobby";
    $students = array('a','c','d');
    foreach($students as $seat)
    {
        //$$ to get value of variable
    echo $$seat . "<br/>";
    }
?>
<section class="sectionRight">
    <h2>Contact</h2>
    <form action="http://salminoz-kit.cf/formmail.php" method="post" name="form1" id="form1">
        <label for="name">Name:</label>
        <br>
        <input name="name" type="text" required class="formStyle" id="name" form="form1">
        <br>
        <label for="email">Email:</label>
        <br>
        <input name="email" type="email" required class="formStyle" id="email" form="form1">
        <br>
        <label for="comments">Comments:</label>
        <br>
        <textarea name="comments" cols="25" rows="5" required class="formStyle" id="comments" form="form1"></textarea>
        <br>
        <input type="submit" class="formStyle" name="submit" id="submit" value="Submit">
        <br>
        &nbsp;
    </form>

</section>
</body>
</html>

