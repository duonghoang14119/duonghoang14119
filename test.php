<?php

//trait Greeting {
//    public function sayHello() {
//        echo 'Hello!';
//    }
//    public function sayGoodbye() {
//        echo 'Goodbye!';
//    }
//}
//
//class Person {
//    use Greeting;
//}
//
//class Dog {
//    use Greeting;
//}
//
//$person = new Person();
//$person->sayHello(); // output: Hello!
//
//$dog = new Dog();
//$dog->sayGoodbye(); // output: Goodbye!


//class People
//{
//    protected function hello()
//    {
//        return 'Hello world';
//    }
//}
//
//class AsianPeople extends People
//{
//    public function getSth()
//    {
//        $data = $this->hello();
////        echo $data;
//        // sth code...
//    }
//}
////$new = AsianPeople::class;
//$asianPeople = new AsianPeople();
//$asianPeople->getSth();

class Shape {
    public function getArea() {
        // Do nothing
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }
}

class Circle extends Shape {
    private $radius;

//    public function __construct($radius) {
//        $this->radius = $radius;
//    }

    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Create an array of shapes
$shapes = array(
    new Rectangle(5, 10),
    new Circle(7)
);

// Get the area of each shape
foreach ($shapes as $shape) {
    echo "Area: " . $shape->getArea() . "<br>";
}