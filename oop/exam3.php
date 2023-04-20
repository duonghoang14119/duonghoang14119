<?php
class Person{

    static $name = 'Duong';
    public $notice = 'ghi de';

    static function getName(){
        return self::$name;
    }
}
echo Person::$name;
echo Person::getName();