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
    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "Name: $name <br>";
    echo "Email: $email";
}
?>