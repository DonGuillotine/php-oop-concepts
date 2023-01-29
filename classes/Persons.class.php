<?php
class Persons{
    private string $name;
    public string $eyeColor;
    public string $age;

    //USING CONSTRUCTORS
    public function __construct($name,$eyeColor,$age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    //TO OVERWRITE A PROPERTY GIVE 'EM A NEW NAME (;
    public function names($name){
        $this->name = $name;
    }

    //THIS IS HOW TO ACCESS PRIVATE MODIFIERS->MAKE A PUBLIC FUNCTION AND RETURN IT::THEN ECHO IN INDEX
    public function getUsers(){
        return $this->name;
    }
}