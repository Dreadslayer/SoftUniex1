<!DOCTYPE html>
<html>
<head>
    <title>Table</title>
    <link rel="stylesheet" type="text/css" href="table6.css">
</head>
<body>

<form>

    <input type=text step=any name="name" placeholder="Name"/><br>
    <input type="number" step="any"  name="Phone" placeholder="Phone"><br>
    <input type="number" step=any name="age" placeholder="Age"/><br>
    <input type = text step="any" name="address" placeholder="Address"><br>
    <div><br><input type="submit" value="submit"></div>
    <br>
</form>

<?php
if (isset($_GET['name']) && isset($_GET['age'])) {


    $name = $_GET['name'];
    $phone = $_GET['Phone'];
    $age = $_GET['age'];
    $address =$_GET['address'];

    echo "Name:"." ".$name;
    echo '<br>';
    echo "Phone number:".' '.substr($phone, 0, 3).'-'.substr($phone, 3, 3)."-".substr($phone,6);
    echo '<br>';
    echo "Age:".' '.$age;
    echo '<br>';
    echo 'Address:'.' '.$address;

}
?>

</body>
</html>