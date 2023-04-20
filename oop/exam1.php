<?php
class Student{
    public $name = 'Nguyen Van A';
    protected $email = 'aaa@gmail.com';

    public function getEmail(){
       return $this->email . ' at ' . $this->getTime();
    }

    protected function getTime(){
        return date('Y-m-d h:s', time());
    }
}
$objStudent = new Student;
echo $objStudent->name;
echo '<br/>';
echo $objStudent->getEmail();