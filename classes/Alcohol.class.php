<?php
class Alcohol{
    public static  $drinkingAge = 18;

    public static function drinkers(String $drinks){
       self::$drinkingAge = $drinks;
       return $drinks;
    }
}