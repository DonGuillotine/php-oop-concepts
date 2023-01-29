<?php include_once "classes/Abstract_class.class.php";
include_once "classes/Payment.class.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$ZenithBank = new EcoBank();
echo $ZenithBank->bankStatement();

?>
</body>
</html>