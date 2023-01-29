<?php
/** The declare method can be used to implement your code in strict mode, type hinting must be exact for example String and Integers should be exact */
declare(strict_types=1);
include 'includes/auto_loader.php' ?>
<!doctype html>
<html lang="`en`">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Static Methods</title>
</head>
<body>
<?php
echo Alcohol::$drinkingAge . '<br>';
echo Alcohol::drinkers("hi");
?>
</body>
</html>
