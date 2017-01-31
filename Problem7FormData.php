<!DOCTYPE html>
<html>
<head>
    <title>Table</title>
</head>
<body>

<form>

    <input type=text step=any name="name" placeholder="Name"/><br>
    <input type="number" step=any name="age" placeholder="Age"/><br>
    <input type="radio" name="gender"
        <?php if (isset($gender) && $gender == "Female") echo "checked"; ?>
           value="Female">Female <br>
    <input type="radio" name="gender"
        <?php if (isset($gender) && $gender == "Male") echo "checked"; ?>
           value="Male">Male
    <div><br><input type="submit" value="submit"></div>
    <br>
</form>

<?php
if (isset($_GET['name']) && isset($_GET['age'])) {


    $name = $_GET['name'];
    $age = $_GET['age'];
    $gender1 = $_GET['gender'];

    echo "My name is $name. I am $age years old. I am $gender1";


}
?>

</body>
</html>