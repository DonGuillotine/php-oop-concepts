<?php
class StaticInheritance{
    public const EXAMPLE = "THIS IS A CONSTANT";

    public static function work(){
       return self::EXAMPLE;
    }
}

$end = new StaticInheritance();
echo $end::work();


class Extender extends StaticInheritance{
    public static function load(){
       return parent::work();
    }
}

$final = new Extender();
echo $final::load();