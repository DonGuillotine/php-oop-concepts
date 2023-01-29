<!DOCTYPE html>
<?php include 'includes/auto_loader.php' ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Classes</title>
</head>
<body>
<?php

$property = new Persons("Donald","Brown", 19);
/**Use the unset method to delete or trigger the destructor in the class**/
//unset($property);
echo $property->eyeColor;
$property->names("Jackson");
echo $property->age;
echo $property->getUsers();

?>
</body>
</html>