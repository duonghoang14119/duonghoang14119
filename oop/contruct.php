<?php
class Student{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
        echo 'đã chạy vào đầu';
    }

    public function getInfo(){
        return $this->name;
    }

    public function setName($value){
        $this->name = $value;
    }

    public function getName(){
        return $this->name;
    }

    public function __destruct()
    {
        echo 'đã chạy vào sau tất cả các phương thức';
    }
}
$student =new Student('Hoang');
echo $student->getInfo();
$student->setName(' Duong ');
echo $student->getName();