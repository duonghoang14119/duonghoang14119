<?php
class person{
    protected $name = 'Hoang Duong';
}
class Student extends person{
    public function getName(){
        return $this->name;
    }
}
$objName  = new Student();
echo $objName->getName();