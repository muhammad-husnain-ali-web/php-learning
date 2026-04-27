<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>


<?php
if (isset($_POST['name'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    if ($name == "" || $email == "") {
        echo "All fields are required";
    } else {
        echo "Welcome $name";
    }
}
?>