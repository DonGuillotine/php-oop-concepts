<?php
class Calc{
    // Declaring of my properties
   public string $operator;
   public int $num1;
   public int $num2;

   // A Constructor to to refer to my properties above then assigning them values from the user
   public function __construct($one, $two, $three)
   {
       $this->operator = $one;
       $this->num1 = $two;
       $this->num2 = $three;
   }
   // A function to make the calculation
   public function calculate(){
       switch ($this->operator){
           case "add";
           return $this->num1 + $this->num2;
           break;

           case "sub";
           return $this->num1 - $this->num2;
           break;

           case "div";
           return $this->num1 / $this->num2;
           break;

           case "mul";
           return $this->num1 * $this->num2;
       }

   }

}