<?php
//ABSTRACT CLASSES CAN ONLY BE USED WITHIN THE INHERITED CLASS
abstract class Zenith{
    public function cash(){
        return "THIS IS THE BEST BANK IN AFRICA";
    }

    //ABSTRACT METHODS WORK LIKE INTERFACES GIVING RULES I.E THE METHOD NAME MUST BE THE SAME FOR ALL CHILD CLASSES
    abstract public function bankStatement();
}