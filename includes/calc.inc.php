<?php
//Strict Mode
declare(strict_types=1);
include 'auto_loader.php';

//Using the $_POST super global to take in the tag name
$operate = $_POST['oper'];
$numberOne = $_POST['num1'];
$numberTwo = $_POST['num2'];

//Passing the variables above as arguments to the instantiation of the class
$myCalculator = new Calc($operate, $numberOne, $numberTwo);

//Using a try block to display the users result and a Catch block to display errors
try {
    echo $myCalculator->calculate();
}
catch (TypeError $e){
    echo "Error!: " . $e->getMessage();
}